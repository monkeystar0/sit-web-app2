<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Homepage extends Component
{
    public function render()
    {
        $response = Http::get('https://api.openweathermap.org/data/2.5/weather?lat=-45.031162&lon=168.662643&appid=dba7ca749857059c95601ef7c538c713');
        $jsonData = $response->json();
        if ($response -> successful()){
            return view('livewire.homepage')-> with('w_data', $jsonData);
        }
    }

    

    // public function index()
    // {
    //     $response = Http::get('https://api.openweathermap.org/data/2.5/weather?lat=-45.031162&lon=168.662643&appid=dba7ca749857059c95601ef7c538c713');
    
    //     $jsonData = $response->json();
          
    //     //dd($jsonData);
    //     //echo $jsonData;
    //     if ($response -> successful()){
    //         //dd($response);
    //         return view('livewire.homepage')-> with('testgg', $jsonData);
    //     }
    // }
}
