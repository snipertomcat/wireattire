<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class ProductsCategory extends Model
{
    protected $table = 'products_category';

    protected $fillable = ['name','type'];
}