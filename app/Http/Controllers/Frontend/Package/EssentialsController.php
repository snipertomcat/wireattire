<?php

namespace App\Http\Controllers\Frontend\Package;

use App\Http\Controllers\Controller;

/**
 * Class AccountController.
 */
class EssentialsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function male()
    {
        return view('frontend.package.essentials.male');
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

}
