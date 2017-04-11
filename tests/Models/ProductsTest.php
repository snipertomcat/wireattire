<?php

use App\Models\Products\Products;
use Illuminate\Support\Facades\DB;

class ProductsTest extends TestCase
{
    protected $baseUrl = 'localhost:8000';

    public function __construct()
    {
        $this->application = $this->createApplication();
    }

    public function testEntityProducts()
    {
        $product = new Products();
        $product->name = 'test';
        $product->description = 'description';
        $product->price = 17.99;
        $product->package = \App\Models\Subscription\Packages::find(1);
        $product->category = \App\Models\Products\ProductsCategory::find(1);

        print_r($product->morphTo('package'));
    }

    public function testSelectProducts()
    {
        $products = DB::table('products')->get();
        print_r($products);
    }
}
