<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/23/2017
 */

namespace App\Http\Controllers\Frontend\Subscription;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SubscriptionController extends Controller
{

    public function select()
    {
        return response('hello');
    }

    public function index()
    {
        return view('frontend.subscription.index');
    }

    public function showAllProducts()
    {
        $directory = public_path().'/storage/thumbnails';
        $filenames = array();
        $iterator = new \DirectoryIterator($directory);
        foreach ($iterator as $fileinfo) {
            if ($fileinfo->isFile() && !($fileinfo->isDot())) {
                $filenames[$fileinfo->getMTime()] = $fileinfo->getFilename();
            }
        }

        return view('frontend.subscription.showAllProducts', [
            'thumbs' => array_values($filenames),
            'step' => 3,
            'category_id' => 4,
            'package_id' => 10
        ]);
    }
}