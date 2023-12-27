<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{
    private $results = array();

    public function goldPrice()
    {
        // Create a new Goutte client instance
        $client = new Client();
        // Get the current gold price
        $url = 'https://goldrate.com/ms/harga-emas-hari-ini-semasa/';
        // Go to the gold price page
        $page = $client->request('GET', $url);

        // Get the current gold price
        $currentGoldPrice = $page->filter('.text-right')->filter('.num')->filter('.24kt-price')->text();

        // Return the current gold price
        return $currentGoldPrice;
    }

    public function goldChange()
    {
        // Create a new Goutte client instance
        $client = new Client();
        // Get the current gold price
        $url = 'https://goldrate.com/ms/harga-emas-hari-ini-semasa/';
        // Go to the gold price page
        $page = $client->request('GET', $url);

        // Get the current gold price
        $currentGoldChange = $page->filter('.24kt-price')->filter('.day-percentage-change-value')->text();

        // Return the current gold price
        return $currentGoldChange;
    }
}
