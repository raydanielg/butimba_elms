<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class LocationController extends Controller
{
    private $baseUrl = 'https://tzgeodata.vercel.app/api/v1';

    public function regions()
    {
        $regions = Cache::remember('tz_regions', 86400, function () {
            $response = Http::timeout(15)->get("{$this->baseUrl}/regions/");
            return $response->successful() ? $response->json()['regions'] : [];
        });

        return response()->json(['regions' => $regions]);
    }

    public function districts($region)
    {
        $cacheKey = 'tz_districts_' . md5($region);

        $districts = Cache::remember($cacheKey, 86400, function () use ($region) {
            $response = Http::timeout(15)->get("{$this->baseUrl}/regions/{$region}/districts/");
            return $response->successful() ? $response->json()['districts'] : [];
        });

        return response()->json(['districts' => $districts]);
    }

    public function wards($district)
    {
        $cacheKey = 'tz_wards_' . md5($district);

        $wards = Cache::remember($cacheKey, 86400, function () use ($district) {
            $cleanDistrict = $this->cleanDistrictName($district);
            $response = Http::timeout(15)->get("{$this->baseUrl}/districts/{$cleanDistrict}/wards/");
            $wards = $response->successful() ? $response->json()['wards'] : [];

            if (empty($wards) && $cleanDistrict !== $district) {
                $response = Http::timeout(15)->get("{$this->baseUrl}/districts/{$district}/wards/");
                $wards = $response->successful() ? $response->json()['wards'] : [];
            }

            return $wards;
        });

        return response()->json(['wards' => $wards]);
    }

    private function cleanDistrictName($name)
    {
        $suffixes = [' Municipal', ' District', ' Town', ' Rural', ' Council'];
        foreach ($suffixes as $suffix) {
            if (str_ends_with($name, $suffix)) {
                return str_replace($suffix, '', $name);
            }
        }
        return $name;
    }
}
