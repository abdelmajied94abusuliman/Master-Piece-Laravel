@extends('layouts.masterPageAdmin')

@section('title')
    Admins
@endsection
@section('Admins')
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
                            <h5 class="mb-4" style="display: inline-block">Admin's Table</h5>
                            <a href="{{route('admin.create')}}" style="margin-left : 41vw"><button>Add New Admin</button></a>
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
                                    @foreach ($data as $admin)
                                        <tr>
                                            <td scope="col">{{$i++}}</td>
                                            <td scope="col">{{$admin->name}}</td>
                                            <td scope="col">{{$admin->email}}</td>
                                            <td scope="col"><img width="100px" height="100px" src="{{URL::asset("storage/image/".$admin->image)}}"></td>
                                            @if ( auth()->user()->email == $admin->email )
                                                <th scope="col"><a href="">-</a></th>
                                            @else
                                                <th scope="col"><a href="{{route('admin.destroy' , ['id' => $admin->id])}}">Delete</a></th>
                                            @endif
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
