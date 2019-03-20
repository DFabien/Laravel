<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $table = 'article'; //lien vers ma table article
    public $timestamps = false;  //Désactive la gestion des colonnes created_at et updated_at

    public function orders(){
        return $this->belongsToMany('App\Order');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function discount(){
        return $this->belongsTo('App\Discount')->withPivot('qty');
    }
}
