@extends('layouts.masterPage')
@vite(['resources/css/services.css' , 'resources/js/about.js' ] )

@section('title')
    Services
@endsection


@section('content')



</head>
<body>
    <div id="container-filter-apartment">
        <div id="container-icon-and-search">
            <form action="{{ route('search') }}" method="post" class="div-bar">
                @csrf
                <input type="text" name="search" class="search" id="search-bar" value="{{ isset($_GET['search']) ? $_GET['search'] : '' }}" placeholder="Search...">
            </form>
            <form action={{route('filter-items')}} method="">
                <div class="div-bar" id="ss"><select name="typeOfService" id="typeOfService" style="font-size: 14px;">
                    <option value="Select Service">All Service</option>
                    <option value="Rent" {{old('value') == "Rent" ? 'selected' : '' }}>Rent</option>
                    <option value="Buy" {{old('value') == "Buy" ? 'selected' : '' }}>Buy</option>
                </select></div>
            </div>
            <div id="container-for-select-filter">
                <select name="beds" id="rooms">
                    <option value="0" selected>All Options</option>
                    <option value="1">One Bed</option>
                    <option value="2">Two Beds</option>
                    <option value="3">Three Beds +</option>
                </select>
                <select name="price" id="price">
                    <option value="0" selected>All Prices</option>
                    <option value="1">0-100</option>
                    <option value="100">100-400</option>
                    <option value="400">400-700</option>
                    <option value="700">700+</option>
                </select>
                <select name="furnished" id="furnished">
                    <option value="AllApartments" selected>All Apartments</option>
                    <option value="furnished">Furnished</option>
                    <option value="not-furnished">Not Furnished</option>
                </select>
                <button type="submit" id="filter">Filter</button>
            </form>
        </div>
    </div>

    @foreach ($data as $item)
        <div id="container-apartmnet-and-location">
            <a href={{route('singleItem' , ['item_id' => $item['id']])}} style="text-decoration: none; color:black">
            <div id="container-apartment-pic-and-description">
                <div style="margin-left: 3.5vw">
                    <?php $i = 0?>
                    @foreach ($item['images'] as $image)
                        @if ($i == 0)
                            <img src="{{URL::asset('storage/image/'.$image['image'])}}" alt="image-for-apartmnet" class="apartment-img">
                            <?php $i++ ?>
                        @endif
                    @endforeach
                </div>
                <div id="container-details-of-apartment">
                    <h4>{{$item['name_of_company']}}</h4>
                    <p>{{$item['location']}}. {{$item['house_number']}}, {{$item['street_name']}}.</p>
                    <p>{{$item['area']}} Sq. M. |
                        @if ($item['service'] == 'Sell')
                            JOD {{$item['price']}}</p>
                        @else
                            JOD {{$item['price']}}/{{$item['frequency']}}</p>
                        @endif
                    <p id="short-description">{{$item['description']}}
                    </p>
                    <div id="container-icons-details">
                        <p><i class="fa-solid fa-bed" style="color:green; font-size: 1.4rem;"></i> <strong> {{$item['beds']}} Beds </strong></p>
                        <p><i class="fa-solid fa-bath" style="color:rgb(34, 196, 255); font-size: 1.4rem;"></i><strong> {{$item['baths']}} Baths </strong></p>
                        <p><img src="{{URL::asset('storage/image/sqm.png')}}" alt="SQM" style="width: 1.1rem; height:1.1rem"> <strong> {{$item['area']}} Sq. M. </strong></p>
                    </div>
                </div>
            </div>
            </a>
            <div id="imageForNormalScreens">
                <?php $i = 0?>
                @foreach ($item['images'] as $image)
                    @if ($i < 4)
                        @if ($i == 1)
                            <img style="width : 8vw ; height : 8vw" src="{{URL::asset('storage/image/'.$image['image'])}}" alt="location-of-apartment" class="apartment-location"><br>
                        @else
                            <img style="width : 8vw ; height : 8vw" src="{{URL::asset('storage/image/'.$image['image'])}}" alt="location-of-apartment" class="apartment-location">
                        @endif
                    @endif
                    <?php $i++ ?>
                @endforeach
                <br>
                <a style="cursor: pointer" href={{route('singleItem' , ['item_id' => $item['id']])}}><button id="explore-btn">Explore This {{$item['type']}}</button></a>
            </div>

            <div id="imageForSmallScreens">
                <?php $i = 0?>
                @foreach ($item['images'] as $image)
                    @if ($i < 4)
                        <img style="width : 20vw ; height : 15vw" src="{{URL::asset('storage/image/'.$image['image'])}}" alt="location-of-apartment" class="apartment-location">
                    @endif
                    <?php $i++ ?>
                @endforeach
                <br>
                <a style="cursor: pointer" href={{route('singleItem' , ['item_id' => $item['id']])}}><button id="explore-btn">Explore This {{$item['type']}}</button></a>
            </div>
        </div>
        <hr>
    @endforeach

    <div class="pagination">
        {{ $allItems->links() }}
    </div>

    <span class="up"> <i class="fa-solid fa-up-long"></i></span>


@endsection
