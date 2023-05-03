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
        $furnished = $request->furnished;
        $service = $request->typeOfService;

        // dd($price);

        // if($price == 0){
        //     $allItems = Item::orderBy('created_at', 'desc')->where('status' , 'Accepted')->where('beds', '>=' , $beds)->get();
        // } else {
        //     $allItems = Item::orderBy('created_at', 'desc')->where('status' , 'Accepted')->where('beds', '>=' , $beds)->where('price', '>=' , $price)->where('price'  , '<=' , $price+300)->get();
        // }

        $ServiceFilter = 'All';
        $BedsFilter = 0;
        $PriceFilter = 0;
        $FurnishedFilter = 'AllApartments';

        $allItems = Item::query();

            if($service == 'Rent'){
                $allItems->orderBy('created_at', 'desc')->where('status' , 'Accepted')->where('service_id' , '1');
                $ServiceFilter = "Rent";
            } else if ($service == 'Buy') {
                $allItems->orderBy('created_at', 'desc')->where('status' , 'Accepted')->where('service_id' , '2');
                $ServiceFilter = "Buy";
            } else {
                $allItems->orderBy('created_at', 'desc')->where('status' , 'Accepted');
                $ServiceFilter = "All";
            }

            if($beds == 3 || $beds == 0){
                $allItems->orderBy('created_at', 'desc')->where('status' , 'Accepted')->where('beds' , '>=' , $beds);
                if($beds == 3){
                    $BedsFilter = 3;
                } else {
                    $beds = 0;
                }
            } else {
                $allItems->orderBy('created_at', 'desc')->where('status' , 'Accepted')->where('beds' , $beds);
                $BedsFilter = $beds;
            }

            if($price == 1){
                $allItems->where('price', '>=' , $price)->where('price'  , '<=' , $price+100);
                $PriceFilter = 1;
            } else if ($price != 0) {
                $allItems->where('price', '>=' , $price)->where('price'  , '<=' , $price+300);
                $PriceFilter = $price;
            }

            if($furnished == 'not-furnished'){
                $allItems->orderBy('created_at', 'desc')->where('status' , 'Accepted')->where('is_furnished' , '0');
                $FurnishedFilter = 'not-furnished';
            } else if ($furnished == 'furnished') {
                $allItems->orderBy('created_at', 'desc')->where('status' , 'Accepted')->where('is_furnished' , '1');
                $FurnishedFilter = 'furnished';
            } else {
                $allItems->orderBy('created_at', 'desc')->where('status' , 'Accepted');
                $FurnishedFilter = 'AllApartments';
            }

        $allItems = $allItems->paginate(4);

        // dd($ServiceType);
        // $allItems->appends(['is_furnished' => $request->furnished]);




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

        return view("user.filters" , ['data' => $data , 'allItems'=>$allItems , 'ServiceFilter'=>$ServiceFilter , 'BedsFilter'=>$BedsFilter , 'PriceFilter'=>$PriceFilter , 'FurnishedFilter'=>$FurnishedFilter]);


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
