<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/16/2017
 */

namespace App\Models\Store;

use App\Models\Store\Traits\Relationship\StartupProductRelationship;
use Illuminate\Database\Eloquent\Model;

class StartupProduct extends Model
{
    use StartupProductRelationship;

    protected $table = 'products_startup';

    protected $fillable = [
        'name',
        'description',
        'price',
        'isActive',
        'package_id',
        'category_id',
        'image1',
        'image2',
        'image3',
        'link',
        'sku'
    ];

}