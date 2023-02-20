@vite('resources/css/login.css')
@extends('layouts.masterPage')

@section('title')
    Login
@endsection

@section('content')
<x-auth-session-status class="mb-4" :status="session('status')" />
    <section>
        <div class="container">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="">E-mail</label>
                <input type="email" name="email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <label for="">Password</label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" >

                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>

                <button type="submit">Login</button>
                <p id="not-have-account" >Don't have an account? <a id="go-with-link" href="{{route('register')}}" >Sign up</a></p>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </section>
@endsection
