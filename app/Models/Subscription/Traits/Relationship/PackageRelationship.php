<?php

namespace App\Models\Subscription\Traits\Relationship;

use App\Models\Subscription\PackageType;

/**
 * Class PackageRelationship.
 */
trait PackageRelationship
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type()
    {
        return $this->hasOne(PackageType::class, 'id', 'type_id');
    }
}
