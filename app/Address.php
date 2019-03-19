<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //protected $table = 'address'; //lien vers ma table article
    public $timestamps = false;  //Désactive la gestion des colonnes created_at et updated_at

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }
}