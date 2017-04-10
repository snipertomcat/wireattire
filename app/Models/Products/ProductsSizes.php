<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class ProductsSizes extends Model
{
    protected $table = 'products_sizes';

    protected $fillable = ['product_id', 'size_id'];
}