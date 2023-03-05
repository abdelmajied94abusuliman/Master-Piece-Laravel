<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Service $service)
    {
        $beds = $request->beds;
        $price = $request->price;
        // dd($price);
        $service = $request->typeOfService;

        // if($price == 0){
        //     $allItems = Item::orderBy('created_at', 'desc')->where('status' , 'Accepted')->where('beds', '>=' , $beds)->get();
        // } else {
        //     $allItems = Item::orderBy('created_at', 'desc')->where('status' , 'Accepted')->where('beds', '>=' , $beds)->where('price', '>=' , $price)->where('price'  , '<=' , $price+300)->get();
        // }

        $allItems = Item::query();

                    $allItems->orderBy('created_at', 'desc')->where('status' , 'Accepted')->where('beds', '>=' , $beds);
                    if($price != 0){
                        $allItems->where('price', '>=' , $price)->where('price'  , '<=' , $price+300);
                    }
                    
                    $allItems->paginate(2);

        $allItems = $allItems->get();





        $data = [];
        foreach ( $allItems as $singleData ){
            $data[] = [
                'id'=> $singleData->id,
                'name_of_company' => $singleData->name,
                'location' => $singleData->location,
                'house_number' => $singleData->house_number,
                'street_name' => $singleData->street_name,
                'is_furnished' => $singleData->is_furnished,
                'description' => $singleData->description,
                'beds' => $singleData->beds,
                'baths' => $singleData->baths,
                'area' => $singleData->area,
                'price' => $singleData->price,
                'service' => $singleData->service->name,
                'frequency' => $singleData->frequency,
                'type' => $singleData->type->name,
                'images'=> $singleData->images,
            ];
        };

        // dd($data);

        return view("user.filters" , ['data' => $data]);


        if($request->furnished == 'AllApartments'){
            $furnished = "";
        }
        dd('This Equal AllApartments');
        return ('filter');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
