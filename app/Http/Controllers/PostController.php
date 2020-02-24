<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class PostController extends Controller
{
    //
    public function index($documento){
    	$client = new Client([
	    // Base URI is used with relative requests
	    'base_uri' => 'http://uts.edu.co/portal/consultas/frontend/web/index.php/site',
	    // You can set any number of default request options.
	    'timeout'  => 2.0,
		]);

		$response = $client->request('GET', "index?documento={$documento}");

		$posts = json_decode($response->getBody()->getContents());

		return view('vistaejemplos', compact('posts'));
    }
}
