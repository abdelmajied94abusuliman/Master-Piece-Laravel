<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class Search extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        $allItems = Item::where('name', 'like', '%'.$search.'%')
            ->orWhere('location', 'like', '%'.$search.'%')
            ->orWhere('description', 'like', '%'.$search.'%')
            ->paginate(4);

        // $allItems->appends(['search' => $request->input('search')]);

        foreach($allItems as $singleData) {
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
        }
        // dd($search);
        return view('user.search', ['data' =>$data , 'allItems'=>$allItems , 'search'=>$search]);
    }
}
