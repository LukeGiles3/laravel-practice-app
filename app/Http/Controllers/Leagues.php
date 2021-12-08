<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp;

class teams extends Controller
{
    public function getTeams()
    {
        $client = new GuzzleHttp\Client();
        $res =
            $client->request('GET', 'https://api-football-v1.p.rapidapi.com/v3/teams?id=33', [
                'headers' => [
                    'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
                    'x-rapidapi-key' => 'b9d437a25dmsh46d1cdd0f6ba37ap16f6f2jsnd7c3bfc50aa8'
                ]
            ]);
        return $res->getBody();
    }
}
