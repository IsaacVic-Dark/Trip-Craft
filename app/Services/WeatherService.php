<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

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
        try {
            $response = Http::timeout(5)->get("{$this->url}weather", [
                'q'     => $location,
                'appid' => $this->apiKey,
                'units' => 'metric',
            ]);
    
            if ($response->successful()) {
                return $response->json();
            }
    
            // If the API returned a 404 or similar
            $status = $response->status();
            if ($status === 404) {
                return ['error' => 'No weather found for this location.'];
            }
    
            return [
                'error' => $response->json()['message'] ?? 'Unable to fetch weather data.',
            ];
        } catch (RequestException $e) {
            return [
                'error' => 'Network error. Please try again later.',
            ];
        } catch (\Exception $e) {
            return [
                'error' => 'Unexpected error occurred. Please try again.',
            ];
        }
    }
}
