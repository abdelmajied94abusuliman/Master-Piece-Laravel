@vite('resources/css/register.css')
@extends('layouts.masterPage')

@section('title')
    Register
@endsection


@section('content')
    <section>
        <div class="container">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div id="table-form">

                    <div><label>First Name</label></div>
                    <div><input onchange="checkFirstName()" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus ></div>


                    <div id="firstName-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Please don't use numbers or Char. And don't let it empty.</div>
                    <div id="firstName-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">Name is okay.</div>
                </div>


                {{-- <div id="table-form">
                    <div><label>Last Name</label></div>
                    <div><input id="last-name" type="text" name="lname" onchange="checkLastName()"></div>
                    <div id="lastname-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Please don't use numbers or Char. And don't let it empty.</div>
                    <div id="lastname-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">Name is okay.</div>
                </div> --}}


                <div id="table-form">

                    <div><label>E-mail</label></div>
                    <div><input onchange="checkEmail()" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required ></div>


                    <div id="email-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Invalid Email.</div>
                    <div id="email-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">Email is okay.</div>
                </div>


                {{-- <div id="table-form">
                    <div><label>Mobile</label></div>
                    <div><input id="your-mobile" type="number" name="mobile" onchange="checkMobile()"></div>
                    <div id="mobile-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Invalid Number</div>
                    <div id="mobile-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">The Number is okay.</div>
                </div> --}}


                <div id="table-form">

                    <div><label>Password</label></div>
                    <div><input onchange="checkPass()" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" ></div>


                    <div id="password-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Please use at least one Upper-Lower-Number and Special Char.</div>
                    <div id="password-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">Password is okay.</div>
                </div>
                <div id="table-form">

                    <td><label>Confirm Password</label></td>
                    <td><input onchange="checkConfirmation()" id="password_confirmation" class="block mt-1 w-full"  type="password" name="password_confirmation" required ></td>


                    <div id="confirm-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Your Password doesn't matched.</div>
                    <div id="confirm-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">Password is okay.</div>
                </div>

                <div class="flex items-center justify-end mt-4 buttonAndLink">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('You have already account? Please Login') }}
                    </a>

                    <button id="button-register" type="submit">Register</button>
                </div>

            </form>
        </div>
    </section>
@endsection

