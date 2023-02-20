<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile', [ProfileController::class, 'update_image'])->name('profile.update_image');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/add-your-adv-for-your-item' , function(){return view('user.addRequest');});
});

Route::get('/services' , function(){ return view('user.services'); });
Route::get('/home' , function(){ return view('user.home');});
Route::get('/about_us' , function(){ return view('user.about_us');});
Route::get('/contact_us' , function(){ return view('user.contact_us');});
Route::get('/aqaba-city' , function(){ return view('user.aqaba-city');});
Route::get('/single' , function(){ return view('user.single');});

Route::get('adminLogin' , function(){ return view('admin.adminLogin');});

Route::middleware(['admin'])->name('admin.')->group(function(){
    Route::post('admin/dashboard' , [ AdminLoginController::class , 'AdminLogin'])->name('dashboard');
    Route::resource('admin/dashboard' , AdminLoginController::class );
    Route::get('admin/index' , function(){return view('admin.index');});

    Route::get('admin/rr' , [ ItemController::class , 'index_rent_request'])->name('rentRequests');
    Route::get('admin/sr' , [ ItemController::class , 'index_sell_request'])->name('sellRequests');
    Route::get('admin/rentOnSite' , [ ItemController::class , 'index_rent_item'])->name('rentItem');
    Route::get('admin/sellOnSite' , [ ItemController::class , 'index_sell_item'])->name('sellItem');
    Route::get('admin/{id}/rr' , [ItemController::class , 'destroy_rent_req'])->name('destroyRR');
    Route::get('admin/{id}/sr' , [ItemController::class , 'destroy_sell_req'])->name('destroySR');
    Route::get('admin/{id}/rentOnSite' , [ItemController::class , 'destroy_rent_itm'])->name('destroyRI');
    Route::get('admin/{id}/sellOnSite' , [ItemController::class , 'destroy_sell_itm'])->name('destroySI');


    Route::resource('admin/admins' , AdminController::class);
    Route::get('admin/admins/create' , [ AdminController::class , 'create'])->name('create');
    Route::get('admin/{id}/admin' , [AdminController::class , 'destroy'])->name('destroy');

    Route::resource('admin/users' , UserController::class );
    Route::get('admin/{id}/users' , [UserController::class , 'destroy'])->name('userDestroy');
    Route::get('/' , [ AdminLoginController::class , 'destroy'])->name('logout');
});

Route::get('/', function () {
    return view('user.home');
});


Route::post('/services' , [ ItemController::class , 'store' ])->name('addRequest');














require __DIR__.'/auth.php';
