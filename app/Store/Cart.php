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

    public function cacheAttributes(ParameterBag $bag)
    {
        //resolve package & inject:
        $package = $this->modelResolver->resolvePackage($bag->get('package_id'));
        $this->setPackage($package);

        //add later:
        //$this->setSubscription($this->resolveSubscription($bag->get('subscription_id')));
    }

    public function resolveAndAddProduct(ParameterBag $bag)
    {
        //resolve product:
        $product = $this->modelResolver->resolveStartupProduct($bag->get('sku'));
        $this->addProduct($product);
    }


}