<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Liste des options de livraison
    |--------------------------------------------------------------------------
    |
    |
    */

    'Domicile' => [
        'gls' => [
            'name' => "GLS",
            'delay' => "Livraison en 48h",
            'content' => "Livraison à domicile ou au bureau, avec livraison interactive par email et sms pour agir sur la livraison la veille de réception.",
            'price' => 8
        ],
        'chronopost' => [
            'name' => "Chronopost",
            'delay' => "Livraison en 24h, avant 13h",
            'content' => "Livraison express à domicile ou au bureau, avant 13h, avec livraison interactive par email et sms pour agir sur la livraison la veille de réception.",
            'price' => 14
        ],
    ],
    'Point Relais' => [
        'mondialRelais' => [
            'name' => "Mondial Relais",
            'delay' => "Livraison en 48h",
            'content' => "La solution la plus économique pour être livré avec suivi de livraison par email et SMS dans un des 4000 points Mondial Relais. ",
            'price' => 4
        ],
        'chronopost' => [
            'name' => "Chronopost",
            'delay' => "Livraison en 24h",
            'content' => "La livraison express avant 13h dans l'un des nombreux points retraits Chronopost, et suivi par email et SMS de l'acheminement du colis.",
            'price' => 6
        ],
    ]

];
