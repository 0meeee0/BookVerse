<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function fetchData()
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => 'aa9515e980mshd0aa5429a0e7850p168377jsn53efd96e3da2',
        ])->get('https://books-api7.p.rapidapi.com/books');

        if ($response->successful()) {
            $data = $response->json();
            // dd($data);
            return view('index', compact('data'));
        } else {
            return back()->with('error', 'Failed to fetch data from the API');
        }
    }

}
