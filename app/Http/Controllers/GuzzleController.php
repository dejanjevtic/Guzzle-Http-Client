<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    public function getRemoteData() {
    	$client = new Client([
    		'headers' =>['content-type' =>'application/json','Accept'=>'application/json'],
    		]);

    		$response = $client->request('GET','https://api.nasa.gov/planetary/apod?api_key=NNKOjkoul8n1CH18TWA9gwngW1s1SmjESPjNoUFo',[

    			// 'json' => [
    			// 	'code'=>
    			// ]

    		]);
    		$data = $response->getBody();
    		$data = json_decode($data);
    		dd($data);
    }
}
