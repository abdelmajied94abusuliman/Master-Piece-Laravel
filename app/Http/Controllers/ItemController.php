<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_rent_request()
    {
        $rentReq = Item::orderBy('created_at', 'desc')->where('service_id' , '1')->where('status' , 'Pending')->get();
        return view('admin.rentRequest' , ['data' => $rentReq]);
    }

    public function index_sell_request()
    {
        $rentReq = Item::orderBy('created_at', 'desc')->where('service_id' , '2')->where('status' , 'Pending')->get();
        return view('admin.sellRequest' , ['data' => $rentReq]);
    }

    public function index_rent_item()
    {
        $rentReq = Item::orderBy('created_at', 'desc')->where('service_id' , '1')->where('status' , 'Accepted')->get();
        return view('admin.rentItem' , ['data' => $rentReq]);
    }

    public function index_sell_item()
    {
        $rentReq = Item::orderBy('created_at', 'desc')->where('service_id' , '2')->where('status' , 'Accepted')->get();
        return view('admin.sellItem' , ['data' => $rentReq]);
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


        $Item = Item::create([

            'name'=>$request->input('name'),
            'user_id'=>1,
            'is_furnished'=>$request->input('is_furnished'),
            'location'=>$request->input('Location'),
            'service_id'=>$request->input('typeOfServices'),
            'price'=>$request->input('Price'),
            'type_id'=>$request->input('typeOfItem'),
            'beds'=>$request->input('Beds'),
            'baths'=>$request->input('Baths'),
            'area'=>$request->input('Area'),
            'status'=>'Pending',
            'frequency'=>$request->input('Frequency'),
            'description'=>$request->input('description'),
            'house_number'=>$request->input('house_number'),
            'street_name'=>$request->input('street_name'),
            'added_features'=>$request->input('added_features'),
            'general_details'=>$request->input('general_details'),
        ]);

        $ImageItem = new Image;

        // dd($request->file('images'));

        foreach( $request->file('images') as $image){
            // dd($image);
            $imageName = $image->getClientOriginalName();
            // dd($imageName);
            $image->move( public_path('image'), $imageName);

            $newImage = Image::create([
                'image'=>$imageName,
                'item_id'=>$Item->id,
            ]);
            $allImages [] = $imageName;
        }

        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        $allItems = Item::orderBy('created_at', 'desc')->where('status' , 'Accepted')->get();
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

        return view("user.services" , ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy_rent_req($id)
    {
        Item::destroy($id);
        return redirect('/admin/rr');
    }


    public function destroy_sell_req($id)
    {
        Item::destroy($id);
        return redirect('/admin/sr');
    }


    public function destroy_rent_itm($id)
    {
        Item::destroy($id);
        return redirect('/admin/rentOnSite');
    }


    public function destroy_sell_itm($id)
    {
        Item::destroy($id);
        return redirect('/admin/sellOnSite');
    }

    public function seeDescription($id)
    {
        $itemDesc = Item::where('id', $id)->get();
        $itemIMG = Image::where('item_id' , $id)->get();
        foreach ( $itemIMG as $singleData ){
            $images[] = $singleData->image;
        };
        $userID = $itemDesc[0]->user_id;
        $itemOwner = User::where('id' , $userID )->get();
        $userIMG = $itemOwner[0]->image;
        return view('/admin/seeDescription' , ['itemDesc' => $itemDesc , 'images'=> $images , 'userIMG'=>$userIMG]);
    }
}
