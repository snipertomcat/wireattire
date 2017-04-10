<?php

namespace App\Models\Products\Traits\Relationship;

use App\Models\Products\Products;
use App\Models\Products\ProductsCategory;
use App\Models\Products\ProductsImages;
use App\Models\Subscription\Packages;

/**
 * Class ProductsImagesRelationship.
 */
trait ProductsImagesRelationship
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }
}
