@extends('layouts/admin/layout')

@section('title')
   Codes promo

@endsection

@section('content')
   <div class="container">
       <a href="{{ route('adminDiscountAdd') }}" class="btn-ico btn-ico-green"><i class="fas fa-plus"></i> Ajouter un code promo</a>
       <table class="table adminDiscount">
           <tr>
               <th>Nom</th>
               <th class="center">Date de début</th>
               <th class="center">Date de fin</th>
               <th class="center">Réduction</th>
               <th class="center">Action</th>
           </tr>
           @foreach($discounts as $discount)
               <tr>
                   <td>{{ $discount->name }}</td>
                   <td class="center">{{  date('d-m-Y', strtotime($discount->start_date)) }}</td>
                   <td class="center">{{  date('d-m-Y', strtotime($discount->end_date)) }}</td>
                   @if($discount->promo_type == 1)
                       <td class="center">- {{ $discount->value }} %</td>
                   @else
                       <td class="center">- {{ $discount->value }} €</td>
                   @endif
                   <td class="center">
                       <a href="{{ route('adminDiscountEdit', ['id' => $discount->id]) }}" class="btn-ico btn-ico-blue"><i class="fas fa-edit"></i></a>

                       <!-- Button trigger modal -->
                       <button type="button" class="btn-ico btn-ico-red" data-toggle="modal" data-target="{{ '#modal' . $discount->id }}">
                           <i class="fas fa-trash-alt"></i>
                       </button>

                       <!-- Modal -->
                       <div class="modal fade" id="{{ 'modal' . $discount->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       Supprimer la promotion : {{ $discount->name }} ?
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn-ico btn-ico-blue" data-dismiss="modal">Annuler</button>
                                       <form action="{{ route('adminDiscountDelete' , ['id' => $discount->id]) }}" method="POST">
                                           @csrf
                                           @method('delete')
                                           <button type="submit" class="btn-ico btn-ico-red">Supprimer</button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </td>
               </tr>
           @endforeach
       </table>
   </div>
@endsection