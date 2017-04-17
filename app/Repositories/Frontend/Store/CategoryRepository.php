<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/16/2017
 */

namespace App\Repositories\Frontend\Store;


use App\Models\Products\ProductsCategory;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository
{
    const MODEL = ProductsCategory::class;
}