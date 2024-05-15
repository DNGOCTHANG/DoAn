<?php

use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\favorite;

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

Route::get('/', function () {
    return view('crud_user.create');
});

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');


Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');
Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');


Route::get('dashboard', [CrudUserController::class, 'dashboard']);
Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');


Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');
Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');


Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');


// home
//Route::get('homes', [Controllers::class, 'home'])->name('homes');
Route::get('home', [Controllers::class, 'index'])->name('listHome');
// nav
Route::get('nav', [Controllers::class, 'nav'])->name('nav');


//cart
Route::get('shoppingCart/{id}', [Controllers::class, 'addToCart'])->name('addToCart');
Route::get('delete-cart/{id}', [Controllers::class, 'deleteCart'])->name('deleteCart');

Route::get('cart', [Controllers::class, 'showCart'])->name('cart');
Route::get('Detail-cart', [Controllers::class, 'Detail'])->name('Detail');


Route::get('favoritecart/{id}', [favorite::class, 'addfavorite'])->name('addfavorite');
Route::get('cartfovorite', [favorite::class, 'showFavorites'])->name('cartfovorite');
Route::get('delete-cartfovorite/{id}', [favorite::class, 'deleteFavorite'])->name('deleteFavorite');
Route::get('phantrang', [Controllers::class, 'index'])->name('phantrang');

Route::get('forgot-password', [CrudUserController::class, 'showUpdatePasswordForm'])->name('crud_user.forgot_password');
Route::post('forgot-password', [CrudUserController::class, 'forgotPassword'])->name('forgot.password');


Route::post('/submit-review', 'ReviewController@submitReview')->name('submitReview');

