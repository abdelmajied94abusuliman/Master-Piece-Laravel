@extends('layouts.masterPage')
@vite(['resources/css/services.css' , 'resources/js/about.js' ] )

@section('title')
    Services
@endsection


@section('content')





</head>
<body>

    <form action="" method="">
        <div id="container-filter-apartment">
            <div id="container-icon-and-search">
                <div class="div-bar" id="ss"><select name="typeOfService" id="typeOfService">
                    <option value="Rent" selected>Rent</option>
                    <option value="Buy">Buy</option>
                </select></div><div class="div-bar"><input type="text" placeholder="Search" id="search-bar"></div>
            </div>
            <div id="container-for-select-filter">
                <select name="rooms" id="rooms">
                    <option value="0" selected>All Options</option>
                    <option value="1">One Room</option>
                    <option value="2">Two Room</option>
                    <option value="3">Three Room +</option>
                </select>
                <select name="price" id="price">
                    <option value="0" selected>All Prices</option>
                    <option value="100">0-100</option>
                    <option value="300">100-300</option>
                    <option value="600">300-600</option>
                    <option value="900">600+</option>
                </select>
                <select name="furnished" id="furnished">
                    <option value="AllApartments" selected>All Apartments</option>
                    <option value="furnished">Furnished</option>
                    <option value="not-furnished">Not Furnished</option>
                </select>
                <button type="submit" id="filter">Filter</button>
            </div>
        </div>
    </form>

    <div id="container-apartmnet-and-location">
        <a href="/single" style="text-decoration: none; color:black">
        <div id="container-apartment-pic-and-description">
            <div>
                <img src="{{URL::asset('storage/image/2516837-800x600.jpg')}}" alt="image-for-apartmnet" class="apartment-img">
            </div>
            <div id="container-details-of-apartment">
                <h4>Ihab Al-Kasasbeh Housing Company</h4>
                <p>The seventh residential area. 24, Basman St.</p>
                <p>200 Sq. M. | JOD 10,000 Yearly</p>
                <p>Furnished Apartment For Rent In The <br>seventh residential area. The seventh residential <br>area - Aqaba in a very prime location</p>
                <div id="container-icons-details">
                    <p><i class="fa-solid fa-bed" style="color:green; font-size: 1.4rem;"></i> <strong> 3 Beds </strong></p>
                    <p><i class="fa-solid fa-bath" style="color:rgb(34, 196, 255); font-size: 1.4rem;"></i><strong> 2 Baths </strong></p>
                    <p><img src="{{URL::asset('storage/image/sqm.png')}}" alt="SQM" style="width: 1.1rem; height:1.1rem"> <strong> 200 Sq. M. </strong></p>
                </div>
            </div>
        </div>
        </a>
        <div>
            <img src="{{URL::asset('storage/image/maps/map1.jpg')}}" alt="location-of-apartment" class="apartment-location">
        </div>
    </div>
    <hr>
    <div id="container-apartmnet-and-location">
        <div id="container-apartment-pic-and-description">
            <div>
                <img src="{{URL::asset('storage/image/2516837-800x600.jpg')}}" alt="image-for-apartmnet" class="apartment-img">
            </div>
            <div id="container-details-of-apartment">
                <h4>The seventh residential area, Aqaba</h4>
                <p>24, Basman St.</p>
                <p>200 Sq. M. | JOD 10,000 Yearly</p>
                <p>Furnished Apartment For Rent In The <br>seventh residential area. The seventh residential <br>area - Aqaba in a very prime location</p>
                <div id="container-icons-details">
                    <p><i class="fa-solid fa-bed" style="color:green; font-size: 1.4rem;"></i> <strong> 3 Beds </strong></p>
                    <p><i class="fa-solid fa-bath" style="color:rgb(34, 196, 255); font-size: 1.4rem;"></i><strong> 2 Baths </strong></p>
                    <p><img src="{{URL::asset('storage/image/sqm.png')}}" alt="SQM" style="width: 1.1rem; height:1.1rem"> <strong> 200 Sq. M. </strong></p>
                </div>
            </div>
        </div>
        <div>
            <img src="{{URL::asset('storage/image/maps/map1.jpg')}}" alt="location-of-apartment" class="apartment-location">
        </div>
    </div>
    <hr>
    <div id="container-apartmnet-and-location">
        <div id="container-apartment-pic-and-description">
            <div>
                <img src="{{URL::asset('storage/image/2516837-800x600.jpg')}}" alt="image-for-apartmnet" class="apartment-img">
            </div>
            <div id="container-details-of-apartment">
                <h4>The seventh residential area, Aqaba</h4>
                <p>24, Basman St.</p>
                <p>200 Sq. M. | JOD 10,000 Yearly</p>
                <p>Furnished Apartment For Rent In The <br>seventh residential area. The seventh residential <br>area - Aqaba in a very prime location</p>
                <div id="container-icons-details">
                    <p><i class="fa-solid fa-bed" style="color:green; font-size: 1.4rem;"></i> <strong> 3 Beds </strong></p>
                    <p><i class="fa-solid fa-bath" style="color:rgb(34, 196, 255); font-size: 1.4rem;"></i><strong> 2 Baths </strong></p>
                    <p><img src="{{URL::asset('storage/image/sqm.png')}}" alt="SQM" style="width: 1.1rem; height:1.1rem"> <strong> 200 Sq. M. </strong></p>
                </div>
            </div>
        </div>
        <div>
            <img src="{{URL::asset('storage/image/maps/map1.jpg')}}" alt="location-of-apartment" class="apartment-location">
        </div>
    </div>
    <hr>
    <div id="container-apartmnet-and-location">
        <div id="container-apartment-pic-and-description">
            <div>
                <img src="{{URL::asset('storage/image/2516837-800x600.jpg')}}" alt="image-for-apartmnet" class="apartment-img">
            </div>
            <div id="container-details-of-apartment">
                <h4>The seventh residential area, Aqaba</h4>
                <p>24, Basman St.</p>
                <p>200 Sq. M. | JOD 10,000 Yearly</p>
                <p>Furnished Apartment For Rent In The <br>seventh residential area. The seventh residential <br>area - Aqaba in a very prime location</p>
                <div id="container-icons-details">
                    <p><i class="fa-solid fa-bed" style="color:green; font-size: 1.4rem;"></i> <strong> 3 Beds </strong></p>
                    <p><i class="fa-solid fa-bath" style="color:rgb(34, 196, 255); font-size: 1.4rem;"></i><strong> 2 Baths </strong></p>
                    <p><img src="{{URL::asset('storage/image/sqm.png')}}" alt="SQM" style="width: 1.1rem; height:1.1rem"> <strong> 200 Sq. M. </strong></p>
                </div>
            </div>
        </div>
        <div>
            <img src="{{URL::asset('storage/image/maps/map1.jpg')}}" alt="location-of-apartment" class="apartment-location">
        </div>
    </div>
    <hr>

    <span class="up"> <i class="fa-solid fa-up-long"></i></span>


@endsection
