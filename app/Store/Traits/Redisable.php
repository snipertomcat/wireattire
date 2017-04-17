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
    public function addProduct(StartupProduct $product)
    {
        Redis::rpush('cart:' . $this->sessionId . ':products', $product);
    }

    public function setPackage(Packages $package)
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

    public function __destruct()
    {
        Redis::del('cart:' . $this->sessionId . ':products');
        Redis::del('cart:' . $this->sessionId . ':subscription');
        Redis::del('cart:' . $this->sessionId . ':package');
    }
}