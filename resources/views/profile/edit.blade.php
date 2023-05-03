@extends('layouts.masterPage')

@vite(['resources/css/home.css' , 'resources/js/home.js' , 'resources/css/profile.css'])

@section('title')
    Profile
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6" style="margin-top: 5vh ">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

            </div>

            <div id="editMarginForSmallScr" class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg" style="margin-top: 5vh">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg" style="margin-top: 5vh">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection

