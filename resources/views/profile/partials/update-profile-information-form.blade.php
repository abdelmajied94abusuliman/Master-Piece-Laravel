


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

    <style>

        .contanerr{
            background-color:transparent;
            box-shadow: 0px 7px 15px black;
            margin-top:75px;
        }
        .header11 h2{
            margin-left:20px;
            padding-top:5vh ;
            font-size:40px;
            text-align: center;
            padding-bottom: 50px;
            margin: 0px;
            padding-bottom:50px;
        }
        .header1{
            display: flex;
        }
        .header2{
            font-size:20px;
            margin-left: 20px;
            text-align: center;
            padding-bottom:15px;
        }

        .Name_Email{
          /* margin-left:250px; */
            font-size: 20px;
            text-align: center;
            color: aliceblue;

        }
        .name{
            font-size:20px;
            color: rgb(0, 0, 0) ;
            text-align: center;
        }
        .namee{
            font-size:14.5px;
            padding-left:10px;
            background: transparent;
            background-color: rgb(249, 249, 249);
            margin-left:5px;
            border-radius: 50px;
        }

        .buttsave{
            background-color: rgb(0, 154, 0);
            margin-right:15vw;
            cursor: pointer;
            border-radius:50px;
            margin-top:5px;
            width: 10vw;
            height: 5vh;
            color: white;
            font-size: 16px;
        }

        .buttsave:hover{

            color:rgb(255, 255, 255);
            background-color: rgb(3, 103, 3);
            border-radius:50px;
        }

        .massege{
            color: white;
            font-size: 20px;
            text-align: center;
            margin-bottom:35px;
            margin-left:35em;
        }
        .Name_Email1{
            margin-right:12em;
            padding:10px;
        }

        #profile-img, #rese_link {
            margin-left: 40px;
        }

        #btn-rese {
            height: 45px;
            padding: 10px;
            background-color: rgb(224, 223, 223);
        }
        #btn-rese:hover {
            background-color: rgb(116, 116, 116);
            color: white;
        }

    </style>

<body>
    <div class="contanerr ">
     <section>

         <header style="display: flex; flex-direction : column ; height: 53vh; margin-left : 25vw ; padding-top : 2vh" >
                <div class="header1">
                    @if (auth()->user()->image == null)
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" id="profile-img" style="display: block ; width : 15vw ; height : 15vw">
                        <br>
                        <br>
                    @else
                        <img src='{{URL::asset("storage/image/".auth()->user()->image)}}' id="profile-img" style="display: block ; width : 17vw ; height : 22vw">
                        <br>
                        <br>
                    @endif
                    <main style="display: flex; flex-direction : column ;">
                        <form style="margin-left: 2vw ; font-size : 30px" action="{{route('profile.update_image')}}" method="post" enctype="multipart/form-data" file=true>
                            @csrf
                            @method('PUT')
                            <h3 for="">Change Profile Picture</h3>
                            <input type="file" required name="image" id="image"><br><br>
                            <button type="submit">Update Photo</button>
                        </form>
                        <br><br>
                        <a><button style="margin-left: 2vw ; width : 20vw ; font-size : 14px ; height : 5vh" >
                            See Your Items
                        </button></a>
                    </main>
                </div>
        </section>



        <section style="display: flex ; justify-content : center">

                <div style="margin-left: 5vw ; width:30vw">
                    <h1 class="text-lg font-medium text-gray-900 dark:text-gray-100" style="font-size: 40px"> {{-- <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100"> --}}    {{ __('Profile Information ') }}
                    {{-- </h2> --}} </h1>

                <div>
            </div>
            <form method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')

                  <div class="Name_Email" style="display: inline-block">

                      <div class="Name_Email1" style="display: inline-block">
                          <x-input-label  class="name" for="name" :value="__('Name')" />
                          <x-text-input id="name" name="name" type="text" class="namee" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                          <x-input-error class="mt-2" :messages="$errors->get('name')" />
                      </div>

                        <div class="Name_Email1" style="display: inline-block">
                            <x-input-label class="name" for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="namee" :value="old('email', $user->email)" required autocomplete="email" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                              <x-primary-button class="buttsave">{{ __('Save') }}</x-primary-button>

                  </div>
                </div>

        </header>


        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>



                <div>
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                            @endif
                        </div>
                        @endif
                    </div>

                    <div class="flex items-center gap-4">

                        @if (session('status') === 'profile-updated')
                        <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        {{-- class="text-sm text-gray-600 dark:text-gray-400" --}}
                        class="massege"
                        >{{ __('Save Change ') }}</p>
                        @endif
                    </div>

        </form>






        <header>
            <div class="header11">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Update Password') }}
                </h2>
            </div>


        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')


    <div class="Name">

    <div class="current_password">
        <x-input-label  class="name" for="current_password" :value="__('Current Password')" />
        <x-text-input style="margin-left : 0.7vw" id="current_password" name="current_password" type="password" class="namee" autocomplete="current-password" />
        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
    </div>

    <div class="New_Password">
        <x-input-label  class="name" for="password" :value="__('New Password')" />
        <x-text-input style="margin-left : 2vw" id="password" name="password" type="password" class="namee" autocomplete="New-password" />
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
    </div>

    <div class="Confirm_Password">
        <x-input-label  class="name" for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="namee" autocomplete="new-password" />
        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

            <x-primary-button class="butt">{{ __('Save') }}</x-primary-button>
    </div>

            <div class="flex items-center gap-4">

                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="massege"
                    >{{ __('Save change password') }}</p>
                @endif
            </div>
        </form>
    </header>
    </section>
</div>


</body>
</html>
