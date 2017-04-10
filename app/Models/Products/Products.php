<?php

namespace App\Models\Products;

use App\Models\Products\Traits\Relationship\ProductRelationship;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use ProductRelationship;

    protected $table = 'products';

    protected $fillable = ['name','description','price','isActive','package_id','category_id'];
}