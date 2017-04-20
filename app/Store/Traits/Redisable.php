<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/16/2017
 */

namespace App\Store\Traits;

use App\Models\Products\ProductsCategory;
use App\Models\Store\StartupProduct;
use App\Models\Subscription\Packages;
use App\Models\Subscription\Subscription;
use Illuminate\Redis\Connections\PredisConnection;
use Illuminate\Support\Facades\Redis;

/**
 * Class Redisable
 * @package App\Store\Traits
 *
 * Classes that use this trait have access to the redis layer of application. Use these built-in
 * methods to store & retrieve data in redis.
 *
 * redis node: cart/sessionId/products
 */
trait Redisable
{
    public function addRedisProduct(StartupProduct $product)
    {
        Redis::hmset('cart:' . $this->sessionId . ':products:' . $product->id , $product->getAttributes());
    }

    public function setRedisPackage(Packages $package)
    {
        Redis::hmset('cart:' . $this->sessionId . ':package', $package->getAttributes());
    }

    public function setSubscription(Subscription $subscription)
    {
        Redis::hmset('cart:' . $this->sessionId . ':subscription', $subscription->getAttributes());
    }

    public function getCart()
    {
        //@todo: implement getCart()
    }


    public function getCartProducts()
    {
        return Redis::hmget('cart:' . $this->sessionId .':products');
    }

    public function getCartPackage()
    {
        return Redis::hmget('cart:' . $this->sessionId . ':package');
    }

    public function getCartSubscription()
    {
        return Redis::hmget('cart:' . $this->sessionId . ':subscription');
    }

    public function persist()
    {
        Redis::save();
    }

    public function test()
    {
        /** @var PredisConnection $connection */
        $connection = Redis::connection();
    }
}