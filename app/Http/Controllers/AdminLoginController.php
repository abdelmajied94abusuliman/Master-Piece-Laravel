<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
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
        $dataRentPending = Item::where('service_id' , '1')->where('status' , 'Pending')->get()->count();
        $dataSellPending = Item::where('service_id' , '2')->where('status' , 'Pending')->get()->count();
        $dataRentAccepted = Item::where('service_id' , '1')->where('status' , 'Accepted')->get()->count();
        $dataSellAccepted = Item::where('service_id' , '2')->where('status' , 'Accepted')->get()->count();

        $topUser = 0;
        $max = 0;
        $allUsers = Item::get();
        $obj = [];
        foreach($allUsers as $user){
            if(!isset($obj[$user['user_id']])){
                $obj[$user['user_id']] = 1;
            } else {
                $obj[$user['user_id']] += 1;
            }

        }
        $ids = [];
        foreach($obj as $id => $numOfDup){
            array_push($ids , $id);
            if($numOfDup > $max){
                $max = $numOfDup;
                $topUser = $id;
            }
        }
        arsort($obj);

        $getTopUserOnSite = User::where('id' , $topUser)->get();
        $restUsers = User::wherein('id' , $ids)->where('id' , '<>' , $topUser)->take(5)->get();

        foreach($restUsers as $sortedUser){
            $data [] = [
                'name' => $sortedUser->name,
                'email' => $sortedUser->email,
                'numOfAds' => $obj[$sortedUser->id]
            ];
        }

        usort($data, fn($a, $b) => $a['numOfAds'] <=> $b['numOfAds']);
        krsort($data);

        return view('admin.index' , ['dataRentPending'=>$dataRentPending , 'dataSellPending'=>$dataSellPending , 'dataRentAccepted'=>$dataRentAccepted , 'dataSellAccepted'=>$dataSellAccepted , 'topUser'=>$getTopUserOnSite , 'numOfAdv'=>$max , 'restUsers'=>$data]);
    }

    public function AdminLogin(LoginRequest $request)
    {
        $dataRentPending = Item::where('service_id' , '1')->where('status' , 'Pending')->get()->count();
        $dataSellPending = Item::where('service_id' , '2')->where('status' , 'Pending')->get()->count();
        $dataRentAccepted = Item::where('service_id' , '1')->where('status' , 'Accepted')->get()->count();
        $dataSellAccepted = Item::where('service_id' , '2')->where('status' , 'Accepted')->get()->count();

        $topUser = 0;
        $max = 0;
        $allUsers = Item::get();
        $obj = [];
        foreach($allUsers as $user){
            if(!isset($obj[$user['user_id']])){
                $obj[$user['user_id']] = 1;
            } else {
                $obj[$user['user_id']] += 1;
            }

        }
        $ids = [];
        foreach($obj as $id => $numOfDup){
            array_push($ids , $id);
            if($numOfDup > $max){
                $max = $numOfDup;
                $topUser = $id;
            }
        }
        arsort($obj);

        $getTopUserOnSite = User::where('id' , $topUser)->get();
        $restUsers = User::wherein('id' , $ids)->where('id' , '<>' , $topUser)->take(5)->get();

        foreach($restUsers as $sortedUser){
            $data [] = [
                'name' => $sortedUser->name,
                'email' => $sortedUser->email,
                'numOfAds' => $obj[$sortedUser->id]
            ];
        }

        usort($data, fn($a, $b) => $a['numOfAds'] <=> $b['numOfAds']);
        krsort($data);
        // dd($data);

        $email = $request->email;
        $password = $request->password;
        $data = Admin::where('email' , $email )->where('password' , $password)->get();
        if(isset($data[0]['email']) && $data[0]['email'] == $email && Session::get('CurrentAdmin') == null ){
            Session::put('CurrentAdmin' , $email);
            return redirect()->route('admin.dashboard' , ['dataRentPending'=>$dataRentPending , 'dataSellPending'=>$dataSellPending , 'dataRentAccepted'=>$dataRentAccepted , 'dataSellAccepted'=>$dataSellAccepted , 'topUser'=>$getTopUserOnSite , 'numOfAdv'=>$max]);
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
