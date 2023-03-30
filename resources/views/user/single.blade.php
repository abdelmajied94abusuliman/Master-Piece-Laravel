@extends('layouts.masterPage')
@vite([ 'resources/js/arrows.js' , 'resources/js/contact.js' , 'resources/css/single.css' , 'resources/css/home.css' , 'resources/css/slider.css'])

@section('title')
    Single Product
@endsection


@section('content')

    <h1 style="font-size: 2.3rem;">{{$data['name_of_company']}}</h1>
    <div id="container-gallary-and-location">
        <div>
            <div class="slider">
                @foreach ($data['images'] as $image)
                    <div class="slide">
                        <img src="{{URL::asset('storage/image/'.$image['image'])}}" alt="Photo1"/>
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
            {{-- {{dd($data['ownerImage'])}} --}}
            <img style="height:57vh ; margin:auto" src="{{URL::asset('storage/image/'.$data['ownerImage'])}}"  alt="">
        </div>
    </div>


    <div id="container-details-in-single">
        <div class="apartment-details" style="border-right: 1px solid black; padding-right:10rem">
            <p><strong> Location</strong> : {{$data['location']}}</p>
            <p><strong> House Num./Street</strong> : {{$data['house_number']}} - {{$data['street_name']}} Str.</p>
            @if($data['service'] == "Rent")
                <p><strong> Rent </strong> : {{$data['price']}} JOD / {{$data['frequency']}}</p>
            @else
                <p><strong> Sell </strong> : {{$data['price']}} JOD</p>
            @endif
        </div>
        <div class="apartment-details">
            <p><i class="fa-solid fa-bed" style="color:green; font-size: 1.4rem;"></i> <strong> {{$data['beds']}} Beds </strong></p>
            <p><i class="fa-solid fa-bath" style="color:rgb(34, 196, 255); font-size: 1.4rem;"></i><strong> {{$data['baths']}} Baths </strong></p>
            <p><img src="{{URL::asset('storage/image/sqm.png')}}" alt="SQM" style="width: 1.1rem; height:1.1rem"> <strong> {{$data['area']}} Sq. M. </strong></p>
        </div>
    </div>

    <h2 id="description">Description :</h2>
    <div id="container-description">
        <p style="max-width: 50vw">{{$data['description']}}.</p>
        {{-- @if(!auth()->user()->is_admin) --}}
            <div id="general-and-contact-contaienr">
                @if(auth()->check())
                    <div id="btn-owner">
                        <a href="https://wa.me/{{$data['mobile']}}?text=I'am%20interessting%20to%20know%20more%20about%20your%20Add."><button>Contact With Owner</button></a>
                        <p>{{$data['mobile']}}</p>
                    </div>
                @else
                    <div id="btn-owner">
                        <a href='/login'><button>Contact With Owner</button></a>
                        <p>Please Login To See The Contact's Information.</p>
                    </div>
                @endif
            </div>
        {{-- @endif --}}
    </div>



    <section class="the-sections-after-first">
        <div class="title-of-section">
            <p>Suggested Apartment</p>
        </div>
        <div id="container-of-apartment-photos-and-description">
            @foreach ($Suggested as $item)
                <a id="singleItem" href={{route('singleItem' , ['item_id'=>$item['id']])}}>
                    <figure>
                        <?php $i = 0?>
                        @foreach ($item['images'] as $image)
                            @if ($i == 0)
                                <img src="{{URL::asset('storage/image/'.$image['image'])}}" alt="200 Sq. M. | JOD10,000 Yearly" class="apartment-image-in-explore">
                                <?php $i++ ?>
                            @endif
                        @endforeach
                        <figcaption>
                            <p class="name-of-area-for-apartment">{{$item['name_of_company']}}</p>
                            <p>{{$item['location']}}</p>
                            <p>{{$item['area']}} Sq. M. |
                                @if ($item['service'] == 'Sell')
                                    JOD {{$item['price']}}</p>
                                @else
                                    JOD {{$item['price']}}/{{$item['frequency']}}</p>
                                @endif</p>
                        </figcaption>
                    </figure>
                </a>
            @endforeach
        </div>
    </section>

    <section class="the-sections-after-first">
        <div style="margin-bottom: 50px;"></div>
    </section>

    <span class="up"> <i class="fa-solid fa-up-long"></i></span>


@endsection
