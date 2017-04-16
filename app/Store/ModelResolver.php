<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/16/2017
 */

namespace App\Store\Traits;

use App\Repositories\Frontend\Store\PackageRepository;
use App\Repositories\Frontend\Store\ProductRepository;
use App\Repositories\Frontend\Store\StartupProductRepository;
use App\Repositories\Frontend\Store\CategoryRepository;

trait ModelResolver
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

    public function resolveStartupProduct($startupProductId)
    {
        return $this->startupProductRepo->find($startupProductId);
    }

    public function resolveCategory($category_id)
    {
        return $this->categoryRepo->find($category_id);
    }
}