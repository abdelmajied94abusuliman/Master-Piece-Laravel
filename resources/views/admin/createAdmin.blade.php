@extends('layouts.masterPageAdmin')


@section('Admins')
    active
@endsection


@section('content')

<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content" style="margin-top: 10vh">
        <h1 style="color: black">Admins</h1>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4" style="background-color: #fff !important; ">
                    <h5 class="mb-4">Add New Admin</h5>
                    <form action="{{ route('admin.admins.store') }}" method="post" enctype="multipart/form-data" files=true>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Admin Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Admin Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Admin Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Admin</button>
                        <a href="" class="option-btn" style="border: none; color:#000040 !important"><button style="background-color: yellow !important; color:#000040 !important" class="btn btn-primary">Back To Dashboard</button></a>
                    </form>
                </div>
            </div>
    </div>
</div>

@endsection
