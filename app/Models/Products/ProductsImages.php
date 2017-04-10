<?php

namespace App\Models\Products;

use App\Models\Products\Traits\Relationship\ProductsImagesRelationship;
use Illuminate\Database\Eloquent\Model;

class ProductsImages extends Model
{
    use ProductsImagesRelationship;

    protected $table = 'products_images';

    protected $fillable = ['path','is_active','product_id'];
}