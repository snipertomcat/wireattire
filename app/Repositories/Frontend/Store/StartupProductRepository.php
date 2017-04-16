<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/16/2017
 */

namespace App\Repositories\Frontend\Store;


use App\Models\Store\StartupProduct;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class StartupProductRepository extends BaseRepository
{
    const MODEL = StartupProduct::class;

    public function getActiveByCategory($category_id)
    {
        return DB::table('products_startup')
            ->where('category_id', '=', $category_id)
            ->where('isActive', '=', 1)
            ->get();
    }

    public function getBySku($sku)
    {
        return DB::table('products_startup')
            ->where('sku', '=', $sku)
            ->get();
    }
}