<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/16/2017
 */

namespace App\Store;


use App\Store\Traits\Redisable;
use Symfony\Component\HttpFoundation\ParameterBag;

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
     * @var ModelResolver $modelResolver
     */
    protected $modelResolver;

    protected $step = 0;

    /**
     * Cart constructor.
     */
    public function __construct(ModelResolver $modelResolver)
    {
        $this->modelResolver = $modelResolver;
    }

    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    public function hasSessionId()
    {
        return (isset($this->sessionId) && $this->sessionId !== null) ? true : false;
    }

    public function cacheAttributes(ParameterBag $bag)
    {
        if (!isset($this->package)) {
            //resolve package & inject:
            $this->setPackage($bag->get('package_id'));
        }

        if ($this->step == 0) {
            //clear products first
            $this->clearCart();
        }

        //check if request has any product selections:
        if ($bag->has('sku')) {
            $this->addProduct($bag->get('sku'));
        }

        $this->step = $bag->get('step');

        //add later:
        //$this->setSubscription($this->resolveSubscription($bag->get('subscription_id')));
    }

    public function addProduct($sku)
    {
        //resolve product:
        $product = $this->modelResolver->resolveStartupProduct($sku);
        array_push($this->products, $product);
        $this->addRedisProduct($product);
    }

    private function setPackage($package_id)
    {
       $package = $this->modelResolver->resolvePackage($package_id);
       $this->package = $package;
       $this->setRedisPackage($package);
    }

}