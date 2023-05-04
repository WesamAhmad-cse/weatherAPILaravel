<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class weather extends Controller
{

    public function index(Request $req)
    {
        return $req;

        // $countryName = $req->input('country');
        // return $countryName;
        //$key = '42e48060f5c8fc5dc9bd625fdaef3934';

        // $response = Http::get("api.openweathermap.org/data/2.5/weather?q={$countryName}&appid={$key}");

        // $data = json_decode($response, true);
        // return $data;
        // $tempcelsius = $response->json('main');
        // $data['main']['temp'] - 237;
        // $weather = "<b>" . $data['name'] . ", " . $data['sys']['country'] . ": " . intval($tempcelsius) . "&deg;C</b> <br>";
        // $weather .= "<b>weather condition: </b>" . $data['weather']['0']['description'] . "<br>";
        // $weather .= "<b>Atmosperic pressure: </b>" . $data['main']['pressure'] . "hPa <br>";
        // $weather .= "<b>wind speed: </b>" . $data['wind']['speed'] . "meter/sec <br>";
        // $weather .= "<b>Cloudness: </b>" . $data['clouds']['all'] . " % <br>";

        // $sunrise = $data['sys']['sunrise'];
        // $weather .= "<b>Sunrise: </b>" . date("g:i a", $sunrise) . "<br>";
        // echo $weather;

    }

}
