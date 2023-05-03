@extends('layouts.masterPage')
@vite('resources/css/contactUS.css')

@section('title')
    Contact Us
@endsection


@section('content')


@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="clearFlashSession()"></button>
    </div>
@endif

<script>
    function clearFlashSession() {
        // Make an AJAX request to the route that clears the session data
        fetch('/clear-flash-session', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include the CSRF token for Laravel's CSRF protection
            }
        });

        // Hide the flash message
        document.querySelector('.alert').style.display = 'none';
    }
</script>


    <section class="contact_section">

        <div class="contact_bg">
            <h1>Contact With US</h1>
        </div>

        <div class="contact_body">

        <h2> Were here to help </h2>
                <div class="line">
                    <div></div>
                    <div></div>
                    <div></div>
                 </div>
            <div class="contact_info">
                <div>
                    <span><i class="fa-solid fa-phone"></i></span>
                    <span> Phone No.</span>
                    <span class="text">+962 7 7807 9497</span>
                </div>

                <div>
                    <span><i class="fa-solid fa-at"></i></span>
                    <span>  Email </span>
                    <span class="text">abdelmajied.abusuliman@gmail.com</span>
                </div>

                <div>
                    <span><i class="fa-solid fa-location-dot"></i></span>
                    <span> Address</span>
                    <span class="text"> Aqaba</span>
                </div>
            </div>


            <div class="contact_form">
                <form action="{{route('contactUSForm')}}" method="post">
                    @csrf
                    <div>
                    <input type="text"  class="form_control" name="fname" id="fname" placeholder="First Name" required>
                    <input type="text"  class="form_control" name="lname" id="lname" placeholder="Last Name" required>
                </div>

                <div>
                    <input type="email" class="form_control" name="email" id="email" placeholder="Email" required>
                    <input type="number" class="form_control" name="phone" id="phone" placeholder="Phone" required maxlength="10">
                </div>
                <textarea class="form_control" name="message" id="message" cols="30" rows="5" placeholder="Message"></textarea>
                <input type="submit" class="send_btn" value="send message">
                </form>

                <div>
                    <img src="{{URL::asset('storage/image/contact.png')}}" alt="contact us">
                </div>

            </div>
        </div>


    </section>

    <span class="up"> <i class="fa-solid fa-up-long"></i></span>

    <script src="./js/contact.js"></script>

@endsection
