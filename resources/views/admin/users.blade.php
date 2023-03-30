@extends('layouts.masterPageAdmin')


@section('title')
    Users
@endsection
@section('Users')
    active
@endsection


@section('content')

<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content">

        <div class="container pt-4 px-4" style="margin-bottom: 30px; margin-left:-190px;">
            <div class="row g-4" style="margin-left: 13vw; max-width:89vw">
                <div class="col-12 offset-md-1">
                    <div class="bg-secondary rounded h-100 p-4" style="background-color: #fff !important; ">
                        <div style="margin-bottom: 5vh">
                            <h5 class="mb-4" style="display: inline-block">User's Table</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    @foreach ($data as $user)
                                        <tr>
                                            <td scope="col">{{$i++}}</td>
                                            <td scope="col">{{$user->name}}</td>
                                            <td scope="col">{{$user->email}}</td>
                                            <td scope="col"><img width="100px" height="100px" src="{{URL::asset("storage/image/".$user->image)}}"></td>
                                            <td scope="col"><a href="{{route('admin.userDestroy' , ['id' => $user->id])}}">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
