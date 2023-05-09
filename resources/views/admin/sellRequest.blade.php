@extends('layouts.masterPageAdmin')

@section('title')
    Sell-Requests
@endsection
@section('Requests')
    active
@endsection
@section('Requests-Sell')
    active
@endsection

@section('content')

<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content">

        <div class="container pt-4 px-4" style="margin-bottom: 30px; margin-left:-125px;">
            <div class="row g-4">
                <div class="col-12 offset-md-1">
                    <div class="bg-secondary rounded h-100 p-4" style="background-color: #fff !important; ">
                        <h5 class="mb-4">Sell Requests</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Owner</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Type Of House</th>
                                        <th scope="col">Date Of Request</th>
                                        <th scope="col">More Details</th>
                                        <th scope="col">Approve</th>
                                        <th scope="col">Reject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->location}}</td>
                                            @if ($item->type_id == 1)
                                                <td>House</td>
                                            @else
                                                <td>Apartment</td>
                                            @endif
                                            <td>{{$item->price}} JD</td>
                                            <td><a href="{{route('admin.descripItem' , ['id' => $item->id])}}">See Description</a></td>
                                            <td><a href="{{route('admin.acceptRR' , ['id' => $item->id])}}"><button class="btn btn-success">Accept</button></a></td>
                                            <td scope="col"><a href="{{route('admin.destroySR' , ['id' => $item->id])}}">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
