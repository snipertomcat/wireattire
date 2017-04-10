<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/9/2017
 */

namespace App\Models\Subscription;

use Illuminate\Database\Eloquent\Model;

class PackageType extends Model
{
    protected $table = 'subscription_types';

    protected $fillable = ['name'];
}