<?php

namespace App\Http\Controllers\Backend\Scraper;

use App\Models\Scraper\Scraper;
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

        $crawler = $client->request('GET', 'https://modalyst.co/explore/?menu=apparel.denim#sortby=most_views');

        $crawler->filter('.item_displa y')->each(function(Crawler $node) {
            $product['image'] = $node->filter('img')->image();
            $overview = $node->filter('.item_overview');
            $product['title'] = $overview->filter('h1')->text();
            $product['title_short'] = $overview->filter('h2')->text();
            $product['price'] = trim($overview->filter('.price')->text());
            $product['commission'] = $overview->filter('.commission')->text();

            dd($product);
        });

        $images = $crawler->filter('img')->images();

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
