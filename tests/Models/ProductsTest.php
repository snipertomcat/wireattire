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
        $product->package = new \App\Models\Subscription\Packages();
        $product->category = new \App\Models\Products\ProductsCategory();

        print_r($product);
    }

    public function testSelectProducts()
    {
        $products = DB::table('products')->get();
        print_r($products);
    }
}
