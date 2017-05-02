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
    protected $scraper;

    public function __construct(DefaultScraper $scraper)
    {
        $this->scraper = $scraper;
    }

    public function index()
    {
        $scrapers = Scraper::all();
        return view('backend.scraper.index', ['scrapers' => $scrapers]);
    }

    public function show()
    {
        $results = $this->scraper->run();

        return view('backend.scraper.show', ['data' => $results]);
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
