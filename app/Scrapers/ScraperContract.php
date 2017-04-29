<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/27/2017
 */

namespace App\Scrapers;


interface ScraperContract
{
    /**
     * This sets the auth on member $client by calling its setAuth() method
     *
     * @return bool
     */
    public function authorize($userField, $user, $passField, $pass);

    /**
     * Sets up the login form using $url and a selector $xpath
     *
     * @param $xpath
     * @return void
     */
    public function setLoginForm($url, $xpath);

    /**
     * Create a filter $selector and apply it how it is defined in the callable
     *
     * @param $selector
     * @param $callable
     * @return mixed
     */
    public function filter($selector, $callable);
}