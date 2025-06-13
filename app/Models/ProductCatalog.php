<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCatalog extends Model
{
    //
    protected $table = 'product_catalog';
    protected $fillable = [
        'image',
        'title',
        'price',
        'category',
        'description'
    ];
}