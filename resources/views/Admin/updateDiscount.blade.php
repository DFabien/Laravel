@extends('layouts/admin/layout')

@section('title')
    Modification
@endsection
@section('header')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')

    <div class="container">
        <h2 class="titre-principal">Ajout code promo</h2>
        <form method="POST" action="{{ route('adminDiscountStoreUpdate') }}">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{ $discount->id }}">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ $discount->name }}">
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="start_date">Date de début</label>
                    <input type="text" class="form-control" id="start_date" name="start_date" required value="{{ date("d-m-Y", strtotime($discount->start_date)) }}">
                </div>
                <div class="form-group col">
                    <label for="end_date">Date de fin</label>
                    <input type="text" class="form-control" id="end_date" name="end_date" required value="{{date("d-m-Y", strtotime($discount->end_date)) }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="promo_type">Type de réduction</label>
                    <select class="form-control" id="promo_type" name="promo_type">
                        <option value="1" @if($discount->promo_type == 1) selected @endif>Pourcentage</option>
                        <option value="2" @if($discount->promo_type == 2) selected @endif>Somme</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="value">Montant</label>
                    <input type="number" class="form-control" id="value" name="value" required min="0" value="{{ $discount->value }}">
                </div>
            </div>
            <input type="submit" value="valider" class="btn-ico btn-ico-blue">
        </form>
    </div>


@endsection
@section('script')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        jQuery(function($){
            $.datepicker.regional['fr'] = {
                closeText: 'Fermer',
                prevText: '&#x3c;Préc',
                nextText: 'Suiv&#x3e;',
                currentText: 'Aujourd\'hui',
                monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
                    'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
                monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
                    'Jul','Aou','Sep','Oct','Nov','Dec'],
                dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
                dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
                dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
                weekHeader: 'Sm',
                dateFormat: 'dd-mm-yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: '',
                minDate: 0,
                maxDate: '+12M +0D',
                showButtonPanel: true
            };
            $.datepicker.setDefaults($.datepicker.regional['fr']);
        });
        $( function() {
            $( "#start_date" ).datepicker();
            $( "#end_date" ).datepicker();
        } );
    </script>
@endsection