<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" This is website to search for apartment in aqaba for rent or buy or show your house for sell ">
    <meta name="author" content="Abdelmajied Akram Abu Suliman">
    <meta name=" Keyword " content=" aqaba , apartment , rent , buy , sell , jordan , tourism , activities in aqaba , red sea , house ">
    <meta name="Copyright" content=" Orange Coding Academy . Designed by Abdelmajied Akram Abu Suliman ">
    <meta name="refresh" content=" 1 ">
    <link rel="icon" type="image/x-icon" href="{{URL::asset('storage/image/icon.png')}}">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/login.css'])
</head>
<body>

<x-auth-session-status class="mb-4" :status="session('status')" />
    <section style="height: 100vh">
        <h1 style="text-align: center ; margin-bottom : 4vh ; font-size : 40px">Welcome To Admin-dashboard. Please Login.</h1>
        <div class="container flex-login" style="height: 75%">
            <img src="{{URL::asset('storage/image/logoAdmin.png')}}" alt="" style="width:10vw ; height : 30vh">
            <form method="POST" action="{{ route('login') }}" class="adminForm">
                @csrf
                <label for="">E-mail</label>
                <input type="email" name="email" class="adminInput">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <label for="">Password</label>
                <input id="password" class="block mt-1 w-full adminInput" type="password" name="password" required autocomplete="current-password" >
                <button type="submit">Login</button>
            </form>
        </div>
    </section>
</body>
</html>
