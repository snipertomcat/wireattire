<?php

namespace App\Http\Controllers\Frontend\Package;

use App\Http\Controllers\Controller;

/**
 * Class AccountController.
 */
class EssentialsPlusController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function male()
    {
        return view('frontend.package.essentials-plus.male');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function female()
    {
        return view('frontend.package.essentials-plus.female');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function kids()
    {
        return view('frontend.package.essentials-plus.kids');
    }

}
