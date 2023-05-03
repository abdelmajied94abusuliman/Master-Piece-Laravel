@extends('layouts.masterPageAdmin')


@section('title')
    Dashboard-AqabaHomes
@endsection
@section('Dashboard')
    active
@endsection

@section('content')
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <div class="content">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Rent Requests</p>
                                <h6 class="mb-0"><?= $dataRentPending ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Sell Requests</p>
                                <h6 class="mb-0"><?= $dataSellPending ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Rent Advertisements</p>
                                <h6 class="mb-0"><?= $dataRentAccepted ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Sell Advertisements</p>
                                <h6 class="mb-0"><?= $dataSellAccepted ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4" style="background-color: #fff !important; ">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0" style="color:black !important">Best User - {{$topUser[0]['name']}}/{{$topUser[0]['email']}}</h6>
                            </div>
                            <img src="{{URL::asset("storage/image/".$topUser[0]['image'])}}" width="240px">
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4" style="background-color: #fff !important; ">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0" style="color:black !important">Number Of Advertisements For Best User</h6>
                            </div>
                            <p style="font-size: 15vw">{{$numOfAdv}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Top 5 Users</h6>
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Num. Of Advertisements</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    @foreach ($restUsers as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$item['name']}}</td>
                                            <td>{{$item['email']}}</td>
                                            <td>{{$item['numOfAds']}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

@endsection
