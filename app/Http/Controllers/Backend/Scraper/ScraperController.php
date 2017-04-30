<?php

namespace App\Http\Controllers\Backend\Scraper;

use App\Models\Scraper\Scraper;
use App\Models\Store\ModalystProduct;
use App\Scrapers\DefaultScraper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client as Goutte;

class ScraperController extends Controller
{
    public function index()
    {
        return view('backend.scraper.index');
    }

    public function show(Goutte $client)
    {
        $scraper = new DefaultScraper($client);
        $scraper->setFollowRedirects(true);

        $scraper->setLoginForm('https://modalyst.co/login', '//*[@id="login-form"]/div/button');
        $scraper->authorize('email', 'hemham914@gmail.com', 'password', 'yeahyeah');
        $scraper->connect('https://modalyst.co/explore/?menu=apparel.denim#sortby=most_views');

        $callable = function(Crawler $node) {
            $product['image'] = $node->filter('img')->image()->getUri();
            $overview = $node->filter('.item_overview');
            $product['title'] = $overview->filter('h1')->text();
            $product['title_short'] = $overview->filter('h2')->text();
            $product['price'] = trim($overview->filter('.price')->text());
            $product['commission'] = $overview->filter('.commission')->text();
            $modalystProduct = ModalystProduct::query()->create($product);
            $modalystProduct->save();
        };


        $images = $scraper->filter('.item_display', $callable)->images();

        dd($images);
        $nodes = [];
        foreach ($images as $image)
        {
            $nodes = $image->getNode();
        }

        foreach ($nodes as $node)
        {

        }

       /* $crawler->filter('.item_display')->each(function($node) {
            //$node = $node->filter('img')->each(function($node) {
                print_r($node->images());
            //});
        });*/
//        echo count($data);
//        echo "<pre>";print_r($data);
        //dd($crawler);
        //return view('backend.scraper.show');
    }

    public function edit()
    {
        //return view('backend.scraper.edit');
    }

    public function mark()
    {
        //return view('backend.scraper.mark');
    }

    public function destroy()
    {
        //return view('backend.scraper.destroy');
    }

    public function restore()
    {
        //return view('backend.scraper.restore');
    }

    public function delete_permanently()
    {
        //return view('backend.scraper.delete-permanently');
    }

    public function login_as()
    {
        //return view('backend.scraper.login-as');
    }

}
