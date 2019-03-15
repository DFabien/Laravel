<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table='orders';// nom de la table concerné par cette classe
    public $timestamps = false; //desactive la gestion des colonnes created_at et updated_at



    public function products(){

        return $this -> hasMany('App\Products');

    }


}

