<?php

namespace App\Http\Controllers\Frontend\Package;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Store\StoreRequest;
use App\Models\Store\StartupProduct;
use App\Models\Subscription\Subscription;
use App\Repositories\Frontend\Store\StartupProductRepository;
use App\Store\Cart;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Illuminate\Support\Facades\DB;
/**
 * Class EssentialsController.
 */
class EssentialsController extends Controller
{
    use AuthorizesRequests;

    /** @var StartupProductRepository $startupProducts */
    protected $startupProducts;

    protected $steps;

    public function __construct(StartupProductRepository $startupProducts)
    {
        $this->startupProducts = $startupProducts;
        $this->steps = DB::table('subscription_packages')->where('name', '=', 'Essentials')
                                                         ->where('type_id', '=', 1)
                                                         ->get()->all()[0]->steps;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function male()
    {
        //@todo refactor the step component - clock/tick
        if (Session::has('step')) {
            $step = Session::get('step');
            $category_id = $step;
            $step++;
            Session::put('step', $step);
        } else {
            $category_id  = 1;
            $step = 1;
            Session::put('step', $step);
        }

        if ($step < $this->steps) {
            $products = $this->startupProducts->getActiveByCategory($category_id);
            $data = [
                'products' => $products->toArray(),
                'category_id' => $category_id,
                'package_id' => 1,
                'step' => $step
            ];
        } else {
            return redirect('subscription/select');
        }
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

        //make sure session is started, grab id:
        if (!Session::isStarted()) {
            Session::start();
        }

        $sessionId = Session::getId();
        if (!$cart->hasSessionId()) {
            $cart->setSessionId($sessionId);
        }

        //set attributes from request:
        $cart->cacheAttributes($request->request);

        //Session::put('cart'.$sessionId, $cart);
        if (Session::has('step')) {
            $step = Session::get('step');
        }
        Session::put('step', $step);
        Session::save();

        return redirect()->route('frontend.package.essentials.male', ['step' => $step])->withFlashSuccess('Success!');
    }

}
