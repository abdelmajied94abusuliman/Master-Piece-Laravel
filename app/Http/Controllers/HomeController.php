<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = Item::inRandomOrder()->where('status' , 'Accepted')->take(4)->get();

        $data = [];
        foreach ( $items as $singleData ){
            $data[] = [
                'id'=> $singleData->id,
                'name_of_company' => $singleData->name,
                'location' => $singleData->location,
                'area'=> $singleData->area,
                'price' => $singleData->price,
                'service' => $singleData->service->name,
                'frequency' => $singleData->frequency,
                'images'=> $singleData->images,
            ];
        };

        return view('user.home' , ['data'=>$data]);
    }
}
