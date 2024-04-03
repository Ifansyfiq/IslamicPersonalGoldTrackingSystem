<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{

    public function tableGold()
    {

        $client = new Client();

        $crawler = $client->request('GET', 'https://www.livepriceofgold.com/malaysia-gold-price.html');

        $table = $crawler->filter('table')->filter('.data-table-price')->eq(0)->filter('tr')->each(function ($tr) {
            return $tr->filter('td')->each(function ($td)   
            {
                return $td->text();
            });    
        });

        return $table;
    }


    public function goldPrice()
    {
        // Create a new Goutte client instance
        $client = new Client();

        $crawler = $client->request('GET', 'https://www.livepriceofgold.com/malaysia-gold-price.html');

        $currentGoldPrice = $crawler->filter('.sekme-content')->filter('.data-table-price')->filter('.bold3')->text();


        // Return the current gold price
        return $currentGoldPrice;
    }
}
