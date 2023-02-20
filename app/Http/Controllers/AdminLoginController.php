<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Redirect;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function AdminLogin(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = Admin::where('email' , $email )->where('password' , $password)->get();
        if(isset($data[0]['email']) && $data[0]['email'] == $email && Session::get('CurrentAdmin') == null ){
            Session::put('CurrentAdmin' , $email);
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.logout');
        }
    }

    public function destroy(Request $request): RedirectResponse
    {
        // dd('logout');
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/home');
    }
}
