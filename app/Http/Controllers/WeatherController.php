<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\Support\Facades\Request;

class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function show(Request $request){
        $location = $request->query('location');
        // dd($location);
        // try {
            //code...
            $weatherData = $this->weatherService->getWeather($location);
            if (isset($weatherData['error'])) {
                // return view('pages.detailed_activity', ['error' => $weatherData['error']]);
                return view('pages.detailed_activity', "No weather data found");
            }
            return view('pages.detailed_activity', ['weather' => $weatherData]);
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     return view('pages.detailed_activity', "No weather data found");
        // }

    }
}
