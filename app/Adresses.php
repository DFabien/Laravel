<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresses extends Model
{
    protected $table='adresse';// nom de la table concerné par cette classe
    public $timestamps = false; //desactive la gestion des colonnes created_at et updated_at
}
