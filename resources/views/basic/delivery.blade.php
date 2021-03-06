@extends('layouts/layout')

@section('title')
    Livraison
@endsection

@section('content')


    <div class="container">
        <h1 class="titre-principal">Nos modes de livraison</h1>
        <div class="row">
            <div class="col-lg-6 livraison">
                <h2 class="titre-secondaire">A domicile</h2>
                <div>
                    <img src="https://img.saveur-biere.com/themes/sb3/images/shipping_france_logo1.png" alt="logo">
                </div>
                <div>
                    <h3>livraison en 48h</h3>
                    <p>
                        Livraison à domicile ou au bureau, avec livraison interactive par email et sms pour agir sur la
                        livraison la veille de réception.
                    </p>
                </div>
                <div>
                    <img src="https://img.saveur-biere.com/home/cms/page_cms/2018_02_06_15_25_25mini_logo_chronopost.png"
                         alt="logo">
                </div>
                <div>
                    <h3>livraison en 24h, avant 13h</h3>
                    <p>
                        Livraison express à domicile ou au bureau, avant 13h, avec livraison interactive par email et
                        sms
                        pour agir sur la livraison la veille de réception.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 livraison">
                <h2 class="titre-secondaire">En Point Relais</h2>
                <div>
                    <img src="https://img.saveur-biere.com/img/cms/logo-mr-tr.png" alt="Mondial Relay">
                </div>
                <div>
                    <h3>livraison en 48h</h3>
                    <p>
                        La solution la plus économique pour être livré avec suivi de livraison par email et SMS dans un
                        des 4000 points Mondial Relais.
                    </p>
                    <p>
                        <strong>Corse :</strong> supplément de 3€ par rapport à la France
                    </p>
                </div>

                <div>
                    <img src="https://img.saveur-biere.com/home/cms/page_cms/2018_02_06_15_25_25mini_logo_chronopost.png"
                         alt="Chrono Relay">
                </div>
                <div>
                    <h3>livraison en 24h</h3>
                    <p>
                        La livraison express avant 13h dans l'un des nombreux points retraits Chronopost, et suivi par
                        email et SMS de l'acheminement du colis.
                    </p>
                </div>
            </div>
        </div>






























@endsection