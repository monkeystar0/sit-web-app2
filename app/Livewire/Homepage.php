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
    
        $startHotelDate = ''.date('Y-m-d', strtotime(' +1 day'));
        $endHotelDate = ''.date('Y-m-d', strtotime(' +2 day'));
        $jsonData = $response->json();
        if ($response -> successful()){
            $response_hotel = Http::withHeaders([
                'X-RapidAPI-Key' => 'ed54ca274fmsh186cb91d0397bf1p137d21jsnb4fa8d9dbbfc',
                'X-RapidAPI-Host' => 'booking-com.p.rapidapi.com'
            ]) ->get('https://booking-com.p.rapidapi.com/v1/hotels/search',[
                'checkin_date' => $startHotelDate,
                'dest_type' => 'city',
                'units' => 'metric',
                'checkout_date' => $endHotelDate,
                'adults_number' => '2',
                'order_by' => 'popularity',
                'dest_id' => '900039039',
                'filter_by_currency' => 'NZD',
                'locale' => 'en-gb',
                'room_number' => '1',
                //'categories_filter_ids' => 'class::2,class::4,free_cancellation::1',
                'page_number' => '1',
                'include_adjacency' => 'true'
            ]);
            $hotel_res = $response_hotel ->json();
            //dd($response_hotel);
            if ($response_hotel -> successful()){
                return view('livewire.homepage')-> with('w_data', $jsonData)->with('h_data', $hotel_res);
            }
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
