<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/16/2017
 */

namespace App\Store;


use App\Store\Traits\Redisable;
use App\Models\Subscription\Packages;

class Cart
{
    use Redisable;

    /**
     * @var $sessionId : Session ID of user (used for tracking)
     */
    protected $sessionId;

    /**
     * @var array : Main list of chosen products for selected package
     */
    protected $products = [];

    /**
     * @var $package : The specific package for this order
     */
    protected $package;

    /**
     * @var $subscription : Subscription details
     */
    protected $subscription;



    /**
     * Cart constructor.
     */
    public function __construct($sessionId, $package_id)
    {
    }


}