<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PeopleController extends Controller {

    function people() {
        $client = new \GuzzleHttp\Client([
            'base_uri'  => SWAPI
        ]);
        $end_point = 'people';

        do {
            $body = $client->request('GET', $end_point)->getBody();
            $results = json_decode($body)->{'results'};
            $next_page = json_decode($body)->{'next'};
            $end_point = substr($next_page, 21);

            foreach ($results as $value) {
                echo nl2br($value->{'name'} . "\r\n");
            }
            
        } while (!is_null($next_page));

    }

    function bio(Request $name) {

    }
}