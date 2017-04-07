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
    public function essentialsMale()
    {
        return view('frontend.package.essentials.male');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function essentialsFemale()
    {
        return view('frontend.package.essentials.female');
    }

}
