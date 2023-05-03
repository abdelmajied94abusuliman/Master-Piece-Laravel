@extends('layouts.masterPage')
@vite([ 'resources/js/arrows.js' , 'resources/js/contact.js' , 'resources/css/single.css' , 'resources/css/home.css' , 'resources/css/slider.css'])

@section('title')
    Single Product
@endsection

{{Session::put('item_id' , $data['id'])}}


@section('content')

    <h1 id="headNameOfCompany">{{$data['name_of_company']}}</h1>
    <div id="container-gallary-and-location">
        <div id="sliderContainer">
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
        <div id="ownerDetails">
            <p style="margin-left:7vw ; font-weight:bold">Publisher Image</p>
            {{-- {{dd($data['ownerImage'])}} --}}
            <img id="ownerImage" src="{{URL::asset('storage/image/'.$data['ownerImage'])}}"  alt="">
        </div>
    </div>


    <div id="container-details-in-single">
        <div class="apartment-details" id="leftDetails">
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
        <p id="textDescription" style="max-width: 50vw">{{$data['description']}}.</p>
            <div id="general-and-contact-contaienr">
                @if(auth()->check())
                    <div id="btn-owner">
                        <a id="staticSentence" target="_blank" href="https://wa.me/{{$data['mobile']}}?text=I'am%20interessting%20to%20know%20more%20about%20your%20Add."><button>Contact With Owner</button></a>
                        <br>
                        <br>
                        <p id="isLoginSentence">{{$data['mobile']}}</p>
                    </div>
                @else
                    <a href='/login' style="text-decoration: none ; ">
                        <div id="btn-owner">
                            <p id="staticSentence" style="padding-top: 15px;">Contact With Owner</p>
                            <p id="isLoginSentence">Please Login To See The Contact's Information.</p>
                        </div>
                    </a>
                @endif
            </div>
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
