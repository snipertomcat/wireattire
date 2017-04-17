<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/16/2017
 */

namespace App\Store;

use App\Models\Store\StartupProduct;
use App\Repositories\Frontend\Store\PackageRepository;
use App\Repositories\Frontend\Store\ProductRepository;
use App\Repositories\Frontend\Store\StartupProductRepository;
use App\Repositories\Frontend\Store\CategoryRepository;

class ModelResolver
{
    protected $packageRepo;

    protected $productRepo;

    protected $startupProductRepo;

    protected $categoryRepo;

    public function __construct(PackageRepository $packageRepo,
                                ProductRepository $productRepo,
                                StartupProductRepository $startupProductRepo,
                                CategoryRepository $categoryRepo)
    {
        $this->packageRepo = $packageRepo;
        $this->productRepo = $productRepo;
        $this->startupProductRepo = $startupProductRepo;
        $this->categoryRepo = $categoryRepo;
    }

    public function resolvePackage($package_id)
    {
        return $this->packageRepo->find($package_id);
    }

    public function resolveProduct($product_id)
    {
        return $this->productRepo->find($product_id);
    }

    public function resolveStartupProduct($idsOrArray)
    {
        $data = $this->startupProductRepo->getBySku($idsOrArray)->toArray();
        return StartupProduct::find($data[0]->id);
    }

    public function resolveCategory($category_id)
    {
        return $this->categoryRepo->find($category_id);
    }

    public function resolveSubscription($subscription_id)
    {
        //@todo : implement
    }
}