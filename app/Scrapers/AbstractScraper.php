<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/27/2017
 */

namespace App\Scrapers;


use Goutte\Client;

abstract class AbstractScraper implements ScraperContract
{
    /** @var  \Goutte\Client $client */
    protected $client;

    /** @var   \Symfony\Component\DomCrawler\Crawler $crawler */
    protected $crawler;

    /** @var string URL to request the login form at */
    protected $loginUrl;

    /** @var string The xpath selector that points to a button on the form so as to identify it */
    protected $loginXpath;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function authorize($userField, $user, $passField, $pass)
    {
        $crawler = $this->crawler;
        $client = $this->client;

        $crawler = $client->request('GET', $this->loginUrl);
        $form = $crawler->filterXPath($this->loginXpath)->form();

        $form[$userField] = $user;
        $form[$passField] = $pass;
        $crawler = $client->submit($form);

        $client->setAuth('hemham914@gmail.com', 'yeahyeah');

        $this->crawler = $crawler;
        $this->client = $client;
    }

    public function setLoginForm($url, $xpath)
    {
        $this->loginUrl = $url;

        $this->loginXpath = $xpath;
    }

    /**
     * Calls $this->crawler->filter($selector) and passes that into an each() loop with the
     * passed in callable. The callable's signature (which is most likely a closure) should be:
     *
     * $func = return function(Crawler $node) { /** do stuff *\/ };
     * $scraper->filter('somecrazy\pa/th', $func)
     *
     * @param $selector
     * @param $callable
     */
    public function filter($selector, $callable)
    {
        $this->crawler->filter($selector, )
    }

    public function connect($url)
    {
        $this->crawler = $this->client->request('GET', $url);
    }


    public function setFollowRedirects($bool=1)
    {
        $this->client->followRedirects($bool);
    }

    public function getCookies()
    {
        $cookies = [];

        $cookieJar = $this->client->getCookieJar();

        foreach ($cookieJar->all() as $key=>$cookie) {
            $cookies[$key] = $cookie;
        }

        return $cookies;
    }
}