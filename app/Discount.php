<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //protected $table = 'promo'; //lien vers ma table article
    public $timestamps = false;  //Désactive la gestion des colonnes created_at et updated_at

    public function articles(){
        return $this->hasMany('App\Article');
    }
}