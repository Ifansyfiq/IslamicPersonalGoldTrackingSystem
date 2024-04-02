<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{

    public function goldPrice()
    {
        // Create a new Goutte client instance
        $client = new Client();

        $website = $client->request('GET', 'https://www.livepriceofgold.com/malaysia-gold-price.html');

        $currentGoldPrice = $website->filter('.sekme-content')->filter('.data-table-price')->filter('.bold3')->text();


        // Return the current gold price
        return $currentGoldPrice;
    }

}
