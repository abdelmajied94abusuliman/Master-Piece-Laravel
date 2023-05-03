@extends('layouts.masterPageAdmin')


@section('title')
    Messages
@endsection
@section('Msg')
active
@endsection
@section('Msg')
    active
@endsection

@section('content')

<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content">
        <div class="container pt-4 px-4" style="margin-bottom: 30px; margin-left:-190px;">
            <div class="row g-4" style="margin-left: 13vw; max-width:89vw">

                @foreach ($messages as $item)

                <div class="col-sm-12 col-xl-6">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">{{$item->first_name}} {{$item->last_name}}</h6>
                        <h6 class="mb-4">{{$item->email}}</h6>
                        <h6 class="mb-4">{{$item->phone}}</h6>
                        <p style="overflow-y: auto; height:10vw">{{$item->message}}</p>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
