@extends('layouts.masterPage')
@vite('resources/css/about.css')

@section('title')
    About Us
@endsection


@section('content')


    <div class="contact_bg">
            <h1>About US</h1>
    </div>

    <section>
        <div>
            <div id="about_us_title">HomeWebsite.com</div>
            <p class="about_us_text">As the premier online destination for high-quality rental listings, HomeWebsite.com empowers renters to find a place to call home, whether it be an apartment, loft, house, townhome, or condo. HomeWebsite.com features extensive listings presented in a clear, easy-to-read format for the ultimate user-friendly searching experience.</p>

            <p class="about_us_text" style="padding-bottom: 70px;">HomeWebsite.com serves as the complete resource for renters in every part of their journey. Begin your rental search today with HomeWebsite.com or browse the HomeWebsite.com Facebook page for helpful advice, featured rental tours, and customer success stories.</p>
        </div>
    </section>



    <span class="up"> <i class="fa-solid fa-up-long"></i></span>

    <script src="./js/about.js"></script>
    
@endsection
