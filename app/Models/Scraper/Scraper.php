<?php

namespace App\Models\Scraper;

use App\Models\Access\Scraper\Traits\Attribute\ScraperAttribute;
use Illuminate\Database\Eloquent\Model;

class Scraper extends Model
{
    use ScraperAttribute;

    protected $status = 1;

    protected $confirmed = 1;


}
