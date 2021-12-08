<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp;

class Leagues extends Controller
{
    public function getLeagues()
    {
        $client = new GuzzleHttp\Client();
        $res =
            $client->request('GET', 'https://api-football-v1.p.rapidapi.com/v3/teams?id=33', [
                'headers' => [
                    'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
                    'x-rapidapi-key' => env("RAPID_API_KEY")
                ]
            ]);
        return $res->getBody();
    }
}
