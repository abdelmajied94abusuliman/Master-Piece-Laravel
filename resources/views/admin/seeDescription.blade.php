@extends('layouts.masterPageAdmin')

@vite([ 'resources/js/arrows.js' , 'resources/js/contact.js' , 'resources/css/single.css' , 'resources/css/home.css' , 'resources/css/slider.css'])


@section('content')


<h1 style="font-size: 2.3rem;">{{$itemDesc[0]->name}}</h1>
<div id="container-gallary-and-location">
    <div>
        <div class="slider">
            @foreach ($images as $key => $img)
                <div class="slide">
                    <img src="{{URL::asset("storage/image/$img")}}" alt="image{{$key}}" style="width:120vw ; height:90vh "/>
                </div>
            @endforeach

            <button class="btn-slide prev"><i class="fas fa-3x fa-chevron-circle-left"></i></button>
            <button class="btn-slide next"><i class="fas fa-3x fa-chevron-circle-right"></i></button>

        </div>
        <div class="dots-container" style="display: none;">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
        <span class="dot" data-slide="3"></span>
        </div>
    </div>
    <div>
        <p style="margin-left:7vw ; font-weight:bold">Owner</p>
        <img style="height:55vh ; margin:auto" src="{{URL::asset("storage/image/$userIMG")}}"  alt="">
    </div>
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1077.5770096356557!2d35.02324986293484!3d29.549737643612897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sjo!4v1674046873059!5m2!1sar!2sjo" width="400" height="425" style="border:0; margin-right: 6rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
</div>


<div id="container-details-in-single">
    <div class="apartment-details" style="border-right: 1px solid black; padding-right:10rem">
        <p><strong> Location</strong> : {{$itemDesc[0]->location}}</p>
        <p><strong> House Num./Street</strong> : {{$itemDesc[0]->house_number}}, {{$itemDesc[0]->street_name}}</p>
        @if($itemDesc[0]->service_id == 1)
            <p><strong> Rent </strong> : {{$itemDesc[0]->price}} JOD / {{$itemDesc[0]->frequency}}</p>
        @else
            <p><strong> Sell </strong> : {{$itemDesc[0]->price}} JOD</p>
        @endif
    </div>
    <div class="apartment-details">
        <p><i class="fa-solid fa-bed" style="color:green; font-size: 1.4rem;"></i> <strong> {{$itemDesc[0]->beds}} Beds </strong></p>
        <p><i class="fa-solid fa-bath" style="color:rgb(34, 196, 255); font-size: 1.4rem;"></i><strong> {{$itemDesc[0]->baths}} Baths </strong></p>
        <p><img src="{{URL::asset('storage/image/sqm.png')}}" alt="SQM" style="width: 1.1rem; height:1.1rem"> <strong> {{$itemDesc[0]->area}} Sq. M. </strong></p>
    </div>
</div>

<h2 id="description" style="margin-left : 20vw">Description :</h2>
<div id="container-description" style="margin-left : 20vw">
    <p style="max-width: 50vw">{{$itemDesc[0]->description}}</p>
</div>


<section class="the-sections-after-first">
    <div style="margin-bottom: 50px;"></div>
</section>

@endsection
