@extends('layouts.masterPage')
@vite('resources/css/aqaba-city.css')

@section('title')
    Aqaba City
@endsection


@section('content')


    <video autoplay muted loop controls id="myVideo">
        <source src="{{URL::asset('storage/image/Aqaba.mp4')}}" type="video/mp4">
    </video>

    <section>
        <div>
            <h1 id="about_us_title">History of city</h1>
            <p class="about_us_text">Excavations at two tells (archaeological mounds) Tall Hujayrat Al-Ghuzlan and Tall Al-Magass, both a few kilometres north of modern-day Aqaba city, revealed inhabited settlements from c. 4000 BC during the Chalcolithic period, with thriving copper production on a large scale. This period is largely unknown due to the absence of written historical sources. University of Jordan archaeologists have discovered the sites, where they found a small building whose walls were inscribed with human and animal drawings, suggesting that the building was used as a religious site. The people who inhabited the site had developed an extensive water system in irrigating their crops which were mostly made up of grapes, olives and wheat. Several different-sized clay pots were also found suggesting that copper production was a major industry in the region, the pots being used in melting the copper and reshaping it. Scientific studies performed on-site revealed that it had undergone two earthquakes, with the latter one leaving the site completely destroyed.</p>
        </div>
    </section>

    <section class="the-sections-after-first">
        <div class="title-of-section">
            <p>Advice For Some Activities In Aqaba</p>
        </div>
        <div class="container-image-and-text">
            <iframe width="100%" height="303px" src="https://www.youtube.com/embed/pfKqBzHMYF0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen muted autoplay></iframe>
            <div class="container-of-text-and-info">
                <p class="head-for-text">Diving and Snorkeling in Aqaba</p>
                <p class="text-descrip-to-customer">Aqaba is world-famous for its top diving and snorkeling sites. Located on the coast of the Red Sea, Aqaba attracts divers from around the world that want to enjoy its gorgeous underwater world.</p>
                <a href="https://aqaba-diving.com/" class="link-to-article" target="#_blank"><button class="btn">Book Now</button></a>
            </div>
        </div>
        <div class="container-image-and-text">
            <div class="container-of-text-and-info">
                <p class="head-for-text">Be the master of yourself</p>
                <p class="text-descrip-to-customer">Why stress about finding transportation when you arrive? Book your rental car ahead of time with our partner website and enjoy a hassle-free travel experience.</p>
                <a href="https://www.rentalcars.com/us/" class="link-to-article" target="#_blank"><button class="btn">Rent A Car</button></a>
            </div>
            <img src="{{URL::asset('storage/image/rentalcars.com-logo.jpg')}}" class="image-realted-with-article" alt="woman-carry-key">
        </div>
        <div class="container-image-and-text">
            <img src="{{URL::asset('storage/image/wadi-rum-fb.jpg')}}" class="image-realted-with-article" alt="woman-carry-key">
            <div class="container-of-text-and-info">
                <p class="head-for-text">Rum trips with the best camps</p>
                <p class="text-descrip-to-customer">Ready for an unforgettable adventure? Don't miss out on exploring one of the world's most stunning landscapes. Join our partner and us on a captivating trip to Wadi-Rum.</p>
                <a href="http://arena-desert-camp-adventurers-villa.jordan-all-hotels.com/en/" class="link-to-article" target="#_blank"><button class="btn">Join Us</button></a>
            </div>
        </div>
    </section>


    <section class="the-sections-after-first">
        <div class="container-image-and-text-hidden">
            <iframe width="100%" height="303px" src="https://www.youtube.com/embed/pfKqBzHMYF0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen muted autoplay></iframe>
            <div class="container-of-text-and-info">
                <p class="head-for-text">Diving And Snorkeling In Aqaba</p>
                <p class="text-descrip-to-customer">Aqaba is world-famous for its top diving and snorkeling sites. Located on the coast of the Red Sea, Aqaba attracts divers from around the world that want to enjoy its gorgeous underwater world.</p>
                <a href="https://aqaba-diving.com/" class="link-to-article" target="#_blank"><button class="btn">Book Now</button></a>
            </div>
        </div>
        <div class="container-image-and-text-hidden">
            <img src="{{URL::asset('storage/image/rentalcars.com-logo.jpg')}}" class="image-realted-with-article" alt="woman-carry-key">
            <div class="container-of-text-and-info">
                <p class="head-for-text">Be The Master Of Yourself</p>
                <p class="text-descrip-to-customer">Why stress about finding transportation when you arrive? Book your rental car ahead of time with our partner website and enjoy a hassle-free travel experience.</p>
                <a href="https://www.rentalcars.com/us/" class="link-to-article" target="#_blank"><button class="btn">Rent A Car</button></a>
            </div>
        </div>
        <div class="container-image-and-text-hidden">
            <img src="{{URL::asset('storage/image/wadi-rum-fb.jpg')}}" class="image-realted-with-article" alt="woman-carry-key">
            <div class="container-of-text-and-info">
                <p class="head-for-text">Rum Trips With The Best Camps</p>
                <p class="text-descrip-to-customer">Ready for an unforgettable adventure? Don't miss out on exploring one of the world's most stunning landscapes. Join our partner and us on a captivating trip to Wadi-Rum.</p>
                <a href="http://arena-desert-camp-adventurers-villa.jordan-all-hotels.com/en/" class="link-to-article" target="#_blank"><button class="btn">Join Us</button></a>
            </div>
        </div>
    </section>

    <section class="the-sections-after-first">
        <div style="margin-bottom: 50px;"></div>
    </section>


    <span class="up"> <i class="fa-solid fa-up-long"></i></span>

    <script src="./js/aqaba.js"></script>

@endsection
