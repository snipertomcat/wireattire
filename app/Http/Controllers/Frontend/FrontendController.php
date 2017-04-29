<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        Session::regenerate();
        //clear cart
        if (Session::has('cart'.Session::getId())) {
            Session::remove('cart'.Session::getId());
        }
        //set step to 1:
        Session::put('step', 1);
        //clear success message
        Session::remove('flash_success');
        app()->make('App\Store\Cart')->clearCart();
        return view('frontend.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function wired()
    {
        $directory = public_path().'/storage/thumbnails';
        $filenames = [];
        $iterator = new \DirectoryIterator($directory);
        foreach ($iterator as $fileinfo) {
            if ($fileinfo->isFile() && !($fileinfo->isDot())) {
                if (in_array(strtolower($fileinfo->getExtension()), ['png', 'jpg', 'jpeg', 'tiff', 'gif', 'bmp'])) {
                    $filenames[] = $fileinfo->getFilename();
                }
            }
        }
        return view('frontend.wired', [
            'filenames' => $filenames
        ]);
    }

}
