<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::where('is_admin' , 0)->get();
        return view('admin.users' , ['data' => $data]);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/admin/users');
    }

}
