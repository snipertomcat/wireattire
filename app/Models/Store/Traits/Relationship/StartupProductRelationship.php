<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/16/2017
 */

namespace App\Models\Store\Traits\Relationship;

use App\Models\Products\ProductsCategory;
use App\Models\Subscription\Packages;

trait StartupProductRelationship
{

    public function category()
    {
        return $this->hasOne(ProductsCategory::class, 'id', 'category_id');
    }

    public function package()
    {
        return $this->hasOne(Packages::class, 'id', 'package_id');
    }

}