<?php
/**
 * Created by: Jesse Griffin
 * Date: 4/27/2017
 */

namespace App\Scrapers;

use Goutte\Client;

class DefaultScraper extends AbstractScraper
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    public function run()
    {

    }
}