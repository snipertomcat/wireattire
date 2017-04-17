<?php

namespace App\Http\Controllers\Frontend\Package;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Store\StoreRequest;
use App\Models\Store\StartupProduct;
use App\Repositories\Frontend\Store\StartupProductRepository;
use App\Store\Cart;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

/**
 * Class EssentialsController.
 */
class EssentialsController extends Controller
{
    use AuthorizesRequests;

    /** @var StartupProductRepository $startupProducts */
    protected $startupProducts;

    public function __construct(StartupProductRepository $startupProducts)
    {
        $this->startupProducts = $startupProducts;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function male()
    {
        $products = $this->startupProducts->getActiveByCategory(1);
        $data = [
            'products' => $products->toArray(),
            'category_id' => 1,
            'package_id' => 1
        ];

        return view('frontend.package.essentials.male', $data);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function female()
    {
        return view('frontend.package.essentials.female');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function kids()
    {
        return view('frontend.package.essentials.kids');
    }

    /**
     * @param StoreRequest $request
     */
    public function store(StoreRequest $request)
    {
        /** @var Cart $cart */
        $cart = App::make('Cart');
        $cart->setSessionId(Session::getId());

        //set attributes from request:
        $cart->cacheAttributes($request->request);

        $cart->persist();

        return redirect()->route('frontend.package.essentials.male')->withFlashSuccess('Success!');
    }

}
