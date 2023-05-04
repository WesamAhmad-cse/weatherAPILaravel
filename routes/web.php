<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

//  $json = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/weather?q={$countryName}&appid={$key}"), true);

//         dd($response->json());

Route::get('/', function (Request $req) {
    $key = '42e48060f5c8fc5dc9bd625fdaef3934';
    if ($req->input('submit')) {
        $countryName = $req->input('country');

        $response = Http::get("api.openweathermap.org/data/2.5/weather?q={$countryName}&appid={$key}");

        $data = json_decode($response, true);
        $tempcelsius = $data['main']['temp'] - 237;
        $temp = $data['name'] . ", " . $data['sys']['country'] . ": " . intval($tempcelsius);
        $des = $data['weather']['0']['description'];
        $pres = $data['main']['pressure'];
        $speed = $data['wind']['speed'];
        $clouds = $data['clouds']['all'];

        $sunrise = $data['sys']['sunrise'];
        $sun = date("g:i a", $sunrise);

        // $req->session()->put('temp', $temp);
        // $req->session()->put('des', $des);
        // $req->session()->put('pres', $pres);
        // $req->session()->put('speed', $speed);
        // $req->session()->put('clouds', $clouds);
        // $req->session()->put('sun', $sun);
        return view('weatherCondition')->with('temp', $temp)->with('des', $des)
            ->with('pres', $pres)
            ->with('speed', $speed)
            ->with('clouds', $clouds)
            ->with('sun', $sun);

    }
    if ($req->input('country') == 'ex palestine') {
        $response = Http::get("api.openweathermap.org/data/2.5/weather?q=palestine&appid={$key}");
        $data = json_decode($response, true);
        $tempcelsius = $data['main']['temp'] - 237;
        $temp = $data['name'] . ", " . $data['sys']['country'] . ": " . intval($tempcelsius);
        $des = $data['weather']['0']['description'];
        $pres = $data['main']['pressure'];
        $speed = $data['wind']['speed'];
        $clouds = $data['clouds']['all'];

        $sunrise = $data['sys']['sunrise'];
        $sun = date("g:i a", $sunrise);

        // return view('weatherCondition');

    }
    return view('welcome');

})->name('weather');

// Route::get('/weather', [weather::class, 'index'])->name('weatherIndex');

// Route::get('/home', function () {
//     return view('weatherCondition');
// })->name('weatherCondition');
