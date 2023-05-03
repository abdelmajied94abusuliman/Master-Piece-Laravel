@vite('resources/css/addAds.css')
@extends('layouts.masterPage')

@section('title')
    Edit Your Ads
@endsection

@section('content')
    <section>
        <div class="container" style="height : 155vh">
            <h2>Add Request</h2>
            <form method="POST"  file=true enctype="multipart/form-data" action="{{route('editYourItemDescription' , ['id'=>$data['id']])}}">
                @csrf

                <div id="table-form">
                    <div style="padding-top: 1vw"><label>Owner Name <span style="color: red">*</span></label></div>
                    <div><input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$data['name']}}" required autofocus ></div>
                </div>

                <div id="table-form">

                    <div style="padding-top: 1vw"><label>Is Furnished<span style="color: red"> *</span></label></div>
                    <div style="padding-top: 1vw">

                        @if ($data['is_furnished'] == 1)
                            <input id="Furnished" checked="checked" value="1" class="block mt-1 w-full" type="radio" name="is_furnished" required  > Furnished
                            <input id="Not-Furnished" value="0" class="block mt-1 w-full" type="radio" name="is_furnished" required style="margin-left: 3vw"> Not Furnished
                        @else
                            <input id="Furnished" value="1" class="block mt-1 w-full" type="radio" name="is_furnished" required  > Furnished
                            <input id="Not-Furnished" checked="checked" value="0" class="block mt-1 w-full" type="radio" name="is_furnished" required style="margin-left: 3vw"> Not Furnished
                        @endif

                    </div>

                </div>

                <div id="table-form">
                    <div style="padding-top: 1vw"><label>Loction <span style="color: red">*</span></label></div>
                    <div><input id="name" class="block mt-1 w-full" type="text" name="Location" value="{{$data['location']}}" required autofocus ></div>
                </div>


                <div id="table-form">
                    <div style="padding-top: 1vw"><label>Type Of Services <span style="color: red">*</span></label></div>
                    <div style="padding-top: 1vw">

                        @if ($data['service_id'] == 1)
                            <input id="Rent" value="1" checked="checked" class="block mt-1 w-full" type="radio" name="typeOfServices" required > Rent
                            <input style="margin-left: 5.2vw" id="Sell" value="2" class="block mt-1 w-full" type="radio" name="typeOfServices" required > Sell
                        @else
                            <input id="Rent" value="1" class="block mt-1 w-full" type="radio" name="typeOfServices" required > Rent
                            <input style="margin-left: 5.2vw" checked="checked" id="Sell" value="2" class="block mt-1 w-full" type="radio" name="typeOfServices" required > Sell
                        @endif

                    </div>
                </div>


                <div id="table-form">
                    <div style="padding-top: 1vw"><label>Price <span style="color: red">*</span></label></div>
                    <div><input id="Price" class="block mt-1 w-full" type="number" name="Price" value="{{$data['price']}}" ></div>
                </div>


                <div id="table-form">
                    <div style="padding-top: 1vw"><label>Type Of Item <span style="color: red">*</span></label></div>
                    <div style="padding-top: 1vw">

                        @if ($data['type_id'] == 1)
                            <input id="House" value="1" checked="checked" class="block mt-1 w-full" type="radio" name="typeOfItem" required > House
                            <input style="margin-left: 4.5vw" id="Apartment" value="2" class="block mt-1 w-full" type="radio" name="typeOfItem" required > Apartment
                        @else
                            <input id="House" value="1" class="block mt-1 w-full" type="radio" name="typeOfItem" required > House
                            <input style="margin-left: 4.5vw" checked="checked" id="Apartment" value="2" class="block mt-1 w-full" type="radio" name="typeOfItem" required > Apartment
                        @endif

                    </div>
                </div>

                <div id="table-form" style="display:flex ;">
                    <div>
                        <div style="padding-top: 1vw"><label>Number Of Beds <span style="color: red">*</span></label></div>
                        <select name="Beds" id="Beds" style="width : 9vw ; height : 3vh">
                            <option @if($data['beds'] == 1) selected @endif value="1">1</option>
                            <option @if($data['beds'] == 2) selected @endif value="2">2</option>
                            <option @if($data['beds'] == 3) selected @endif value="3">3</option>
                            <option @if($data['beds'] == 4) selected @endif value="4">4</option>
                            <option @if($data['beds'] == 5) selected @endif value="5">5</option>
                        </select>
                    </div>

                    <div style="margin-left: 2.6vw ; padding-top: 1vw ">
                        <div><label>Number Of Baths <span style="color: red">*</span></label></div>
                        <select name="Baths" id="Baths" style="width : 9.5vw ; height : 3vh">
                            <option @if($data['baths'] == 1) selected @endif value="1">1</option>
                            <option @if($data['baths'] == 2) selected @endif value="2">2</option>
                            <option @if($data['baths'] == 3) selected @endif value="3">3</option>
                            <option @if($data['baths'] == 4) selected @endif value="4">4</option>
                        </select>
                    </div>

                    <div style="margin-left:2.6vw ; padding-top: 1vw ">
                        <div><label>Area <span style="color: red">*</span></label></div>
                        <div><input style="width : 7.5vw ; height : 3vh" id="Area" class="block w-full" value="{{$data['area']}}" name="Area" ></div>
                    </div>
                </div>

                <div id="table-form">
                    <div style="padding-top: 1vw"><label>Frequency <span style="color: red">*</span></label></div>
                    <div style="padding-top: 1vw">


                        @if ($data['frequency'] == "Daily")
                            <input id="Daily" value="Daily" checked="checked" class="block mt-1 w-full" type="radio" name="Frequency" required > Daily
                            <input style="margin-left: 5vw" id="Weekly" value="Weekly" class="block mt-1 w-full" type="radio" name="Frequency" required > Weekly
                            <input style="margin-left: 4.5vw" id="Monthly" value="Monthly" class="block mt-1 w-full" type="radio" name="Frequency" required > Monthly
                            <input style="margin-left: 4.5vw" id="Yearly" value="Yearly" class="block mt-1 w-full" type="radio" name="Frequency" required > Yearly
                        @elseif ($data['frequency'] == "Weekly")
                            <input id="Daily" value="Daily" class="block mt-1 w-full" type="radio" name="Frequency" required > Daily
                            <input style="margin-left: 5vw" checked="checked" id="Weekly" value="Weekly" class="block mt-1 w-full" type="radio" name="Frequency" required > Weekly
                            <input style="margin-left: 4.5vw" id="Monthly" value="Monthly" class="block mt-1 w-full" type="radio" name="Frequency" required > Monthly
                            <input style="margin-left: 4.5vw" id="Yearly" value="Yearly" class="block mt-1 w-full" type="radio" name="Frequency" required > Yearly
                        @elseif ($data['frequency'] == "Monthly")
                            <input id="Daily" value="Daily" class="block mt-1 w-full" type="radio" name="Frequency" required > Daily
                            <input style="margin-left: 5vw" id="Weekly" value="Weekly" class="block mt-1 w-full" type="radio" name="Frequency" required > Weekly
                            <input style="margin-left: 4.5vw" checked="checked" id="Monthly" value="Monthly" class="block mt-1 w-full" type="radio" name="Frequency" required > Monthly
                            <input style="margin-left: 4.5vw" id="Yearly" value="Yearly" class="block mt-1 w-full" type="radio" name="Frequency" required > Yearly
                        @else
                            <input id="Daily" value="Daily" class="block mt-1 w-full" type="radio" name="Frequency" required > Daily
                            <input style="margin-left: 5vw" id="Weekly" value="Weekly" class="block mt-1 w-full" type="radio" name="Frequency" required > Weekly
                            <input style="margin-left: 4.5vw" id="Monthly" value="Monthly" class="block mt-1 w-full" type="radio" name="Frequency" required > Monthly
                            <input style="margin-left: 4.5vw" checked="checked" id="Yearly" value="Yearly" class="block mt-1 w-full" type="radio" name="Frequency" required > Yearly
                        @endif

                    </div>

                </div>

                <div id="table-form">
                    <div style="padding-top: 1vw"><label>House Number <span style="color: red">*</span></label></div>
                    <div>
                        <input required type="text" name="house_number" value="{{$data['house_number']}}" style="width : 23.5vw ; height : 3vh ; padding-top : 1vw">
                    </div>
                </div>

                <div id="table-form">
                    <div style="padding-top: 1vw"><label>Street Name <span style="color: red">*</span></label></div>
                    <div>
                        <input required type="text" name="street_name" value="{{$data['street_name']}}" style="width : 23.5vw ; height : 3vh ; padding-top : 1vw">
                    </div>
                </div>

                <div id="table-form">
                    <div style="padding-top: 1vw"><label>Description <span style="color: red">*</span></label></div>
                    <div>
                        <textarea placeholder="Descripe your Apartment/House." type="text" name="description" style="width : 31.5vw ; height : 10vh ; padding-top : 1vw">{{$data['description']}}</textarea>
                    </div>
                </div>
                <div id="table-form">
                    <div style="padding-top: 3vw"><label>Add To Images</label></div>
                    <div>
                        <input type="file" name="images[]" accept="image/*" multiple style="width : 13.5vw ; height : 10vh ; padding-top : 1vw">
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4 buttonAndLink"  style="margin-top: 2.5vw">
                    <button id="button-register" type="submit">Add</button>
                </div>
            </form>
        </div>
    </section>
@endsection
