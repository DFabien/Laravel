<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';
    public $timestamps = false;
    protected $fillable = ['name', 'descr', 'price', 'weight', 'stock', 'id_category'];

}

