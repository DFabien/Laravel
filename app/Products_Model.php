<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_Model extends Model
{
    protected $table = 'article'; //lien vers ma table article
    public $timestamps = false;  //Désactive la gestion des colonnes created_at et updated_at
}
