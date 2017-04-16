<?php

namespace App\Models\Subscription;

use App\Models\Subscription\Traits\Relationship\PackageRelationship;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use PackageRelationship;

    protected $table = 'subscription_packages';

    protected $fillable = ['name', 'type_id'];
}
