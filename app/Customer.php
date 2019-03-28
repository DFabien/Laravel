<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //protected $table = 'customer'; //lien vers ma table article
    public $timestamps = false;  //Désactive la gestion des colonnes created_at et updated_at

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function addresses(){
        return $this->hasMany('App\Address');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
