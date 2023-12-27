<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{
    private $results = array();
    
    public function scraper()
    {
        $client = new Client();
        $url = 'https://goldrate.com/ms/harga-emas-hari-ini-semasa/';
        $page = $client->request('GET', $url);

        // echo "<pre>";
        // print_r($page);

        $currentGoldPrice = $page->filter('.text-right')->filter('.num')->filter('.24kt-price')->text();
        // echo $page->filter('.text-right')->filter('.num')->filter('.22kt-price')->text();

        return $currentGoldPrice;

        // return view('dashboard', [
        //     'currentGoldPrice' => $currentGoldPrice,
        // ]);

        // return view('dashboard')->with('currentGoldPrice', $currentGoldPrice);
        // return view('scraper');
    }
}
