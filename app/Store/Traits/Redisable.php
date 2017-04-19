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
 */
trait Redisable
{
    public function addRedisProduct(StartupProduct $product)
    {
        Redis::rpush('cart:' . $this->sessionId . ':products', $product);
    }

    public function setRedisPackage(Packages $package)
    {
        Redis::rpush('cart:' . $this->sessionId . ':package', $package);
    }

    public function setSubscription(Subscription $subscription)
    {
        Redis::rpush('cart:' . $this->sessionId . ':subscription', $subscription);
    }

    public function getCart()
    {
        return Redis::lrange('cart:' . $this->sessionId .':products',  0, -1);
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