<?php

use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShopcartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('app.home');
// });
Route::get('/',[Controller::class,'index']);
Route::get('/home',[Controller::class,'index']);

Route::get('/categories', function () {
    return view('app.categories',[
        'categories'=>Category::all()
    ]);
});

Route::get('/categories/{category:slug}',function(Category $category){
    return view('app.category',[
        'markets' => $category->markets,
    ]);
});
Route::get('/users/{user:username}',function(User $user){
    return view('app.user',[
        'markets' => $user->markets,
    ]);
});

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);


Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::resource('/dashboard/market', MarketController::class)->middleware('auth');
Route::get('add-to-cart/{id}',[ShopcartController::class,'addtocart'])->name('add_to_cart');
Route::get('cart',[ShopcartController::class,'cart'])->name('cart');
Route::delete('remove-from-cart',[ShopcartController::class,'remove'])->name('remove_from_cart');