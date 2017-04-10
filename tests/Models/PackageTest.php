<?php

use App\Models\Subscription\Packages;

class PackageTest extends TestCase
{
    protected $baseUrl = 'localhost:8000';

    public function __construct()
    {
        $this->application = $this->createApplication();
    }

    public function testEntityPackages()
    {

    }
}
