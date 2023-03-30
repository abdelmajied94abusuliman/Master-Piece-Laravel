<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ServiceController;

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

Route::get('/' , [HomeController::class , 'index'])->name('home');

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

Route::get('/services' , [ItemController::class , 'show'])->name('show-items');
Route::get('/filter' , [ServiceController::class , 'show'])->name('filter-items');
Route::get('/home' , [HomeController::class , 'index'])->name('home');
Route::get('/about_us' , function(){ return view('user.about_us');})->name('aboutUS');
Route::get('/contact_us' , function(){ return view('user.contact_us');})->name('contactUS');
Route::get('/aqaba-city' , function(){ return view('user.aqaba-city');})->name('aqabaCity');
Route::get('/single/{item_id}/' , [ItemController::class , 'singleItemDetails'])->name('singleItem');


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
    Route::get('admin/{id}/acceptRR' , [ItemController::class , 'accept_rent_req'])->name('acceptRR');


    Route::get('admin/{id}/sr' , [ItemController::class , 'destroy_sell_req'])->name('destroySR');
    Route::get('admin/{id}/rentOnSite' , [ItemController::class , 'destroy_rent_itm'])->name('destroyRI');
    Route::get('admin/{id}/sellOnSite' , [ItemController::class , 'destroy_sell_itm'])->name('destroySI');
    Route::get('admin/{id}/seeDescription' , [ItemController::class , 'seeDescription'])->name('descripItem');


    Route::resource('admin/admins' , AdminController::class);
    Route::get('admin/admins/create' , [ AdminController::class , 'create'])->name('create');
    Route::get('admin/{id}/admin' , [AdminController::class , 'destroy'])->name('destroy');

    Route::resource('admin/users' , UserController::class );
    Route::get('admin/{id}/users' , [UserController::class , 'destroy'])->name('userDestroy');
    Route::get('/' , [ AdminLoginController::class , 'destroy'])->name('logout');
});

Route::get('/' , [HomeController::class , 'index']);


Route::post('/services' , [ ItemController::class , 'store' ])->name('addRequest');














require __DIR__.'/auth.php';
