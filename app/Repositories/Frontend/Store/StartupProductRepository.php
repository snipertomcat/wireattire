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

    /**
     * Retrieve product by sku
     * @param $sku
     * @return mixed
     */
    public function getBySku($sku)
    {
        return DB::table('products_startup')
            ->where('sku', '=', $sku)
            ->get();
    }

    /**
     * Retrieve row at specified field
     * @param $field
     * @param $value
     * @return mixed
     */
    public function getByField($field, $value)
    {
        return DB::table('products_startup')
            ->where($field, '=', $value)
            ->get();
    }
}