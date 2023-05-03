@vite('resources/css/seeAds.css')
@extends('layouts.masterPage')

@section('title')
    My Requests And Ads.
@endsection


@section('content')

        <div class="pt-2 px-4" style="margin-bottom: 30px; margin-left:-125px;">
            <div class="row g-4">
                <div class="col-12" style="padding-left: 10vw">
                    <div class="bg-secondary rounded h-100 p-4" style="background-color: #fff !important; ">
                        <h5 class="mb-4">My Requests And Ads.</h5>
                        <div class="table-responsive">
                            <table class="table" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th >#</th>
                                        <th >Location</th>
                                        <th >Street Name</th>
                                        <th >House Num</th>
                                        <th >Area</th>
                                        <th >Type Of House</th>
                                        <th >Price/Frequency</th>
                                        <th >More Details</th>
                                        <th >Edit</th>
                                        <th >Delete</th>
                                        <th >Status</th>
                                        <th >Time Publish</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1 ?>

                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$item['location']}}</td>
                                            <td>{{$item['street_name']}}</td>
                                            <td>{{$item['house_number']}}</td>
                                            <td>{{$item['area']}}</td>


                                            @if ($item['type'] == 'House')
                                                <td>House</td>
                                            @else
                                                <td>Apartment</td>
                                            @endif


                                            @if($item['service'] == 'Rent')
                                               <td>{{$item['price']}} JOD / {{$item['frequency']}}</td>
                                            @else
                                                <td>{{$item['price']}} JOD</td>
                                            @endif


                                            <td><a class="moreDet" href="{{route('seeYourItemDescription' , ['id' => $item['id']])}}">More Details</a></td>
                                            <td><a href="{{route('seeEditYourItemDescriptionForm' , ['id' => $item['id']])}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                            <td scope="col"><a href="{{route('destroyMyRequest' , ['id' => $item['id']])}}"><i class="fa-solid fa-trash-can"></i></a></td>
                                            <td scope="col">{{$item['status']}}</td>
                                            <td scope="col">{{$item['created_at']}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
