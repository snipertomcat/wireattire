<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/27/2017
 */

namespace App\Scrapers;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Store\ModalystProduct;

class DefaultScraper extends AbstractScraper
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    public function run()
    {
        $this->setFollowRedirects(true);

        $this->setLoginForm('https://modalyst.co/login', '//*[@id="login-form"]/div/button');
        $this->authorize('email', 'hemham914@gmail.com', 'password', 'yeahyeah');
        $this->connect('https://modalyst.co/explore/?menu=apparel.denim#sortby=most_views');

        $callable = function(Crawler $node) {
            $image = $node->filter('img')->image()->getUri();
            $product['image'] = mysql_real_escape_string($image);
            dd($product);
            $overview = $node->filter('.item_overview');
            $product['title'] = $overview->filter('h1')->text();
            $product['title_short'] = $overview->filter('h2')->text();
            $product['price'] = trim($overview->filter('.price')->text());
            $product['commission'] = $overview->filter('.commission')->text();
            $modalystProduct = ModalystProduct::firstOrCreate(['image'=>$product['image'], $product]);
            return '<pre>' . print_r($modalystProduct) . '</pre>';
        };

        return $this->filter('.item_display', $callable);
    }
}