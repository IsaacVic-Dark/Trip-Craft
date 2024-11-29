<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $apiKey;
    protected $url;

    public function __construct()
    {
        $this->apiKey = config('weather.api_key');
        $this->url = config('weather.url');
    }

    public function getWeather(string $location)
    {
        $response = Http::get("{$this->url}weather", [
            'q' => $location,
            'appid' => $this->apiKey,
            'units' => 'metric', // For Celsius
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return [
            'error' => $response->json()['message'] ?? 'Unable to fetch weather data.',
        ];
    }
}
