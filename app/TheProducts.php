<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheProducts extends Model
{
    protected $table = 'products';  //nom de la table concerné par cette classe
    public $timestamps=false; // ignore des champs sql update et create car laravel pense que ca existe par defaut
}
