<?php

namespace App\Models\Products\Traits\Relationship;

use App\Models\Products\ProductsCategory;
use App\Models\Products\ProductsImages;
use App\Models\Subscription\Packages;

/**
 * Class ProductRelationship.
 */
trait ProductRelationship
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function packages()
    {
        return $this->hasOne(Packages::class, 'id', 'package_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(ProductsCategory::class, 'id', 'category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductsImages::class, 'id', 'image_id');
    }
}
