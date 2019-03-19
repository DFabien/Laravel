<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //protected $table = 'orders'; //lien vers ma table article
    public $timestamps = false;  //Désactive la gestion des colonnes created_at et updated_at

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function address(){
        return $this->belongsTo('App\Address');
    }

    public function articles(){
        return $this->belongsToMany('App\Article');
    }
}