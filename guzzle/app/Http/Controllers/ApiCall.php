<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiCall extends Controller
{
    public function test(){
        
        $client = new Client([
            'auth' => ['mMMFhybgZwD1hms2/SSsQ2/f4aeQVfrCHlseVeN', 'L9siWhTupwVp+XWIHNy/7V07AkSLw9UmjMeaJ85']
        ]);
        
        $response = $client->post('https://uat-rfqepay.bseindia.com/token');

        $body = $response->getBody();
        // echo $response->getStatusCode() . PHP_EOL;

        return json_encode($body);
    }

}
