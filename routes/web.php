<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('index');
});

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index');
Route::get('dashboard/withdraw', 'DashboardController@withdraw');
Route::get('dashboard/sell-crypto', 'DashboardController@sellcrypto');
Route::get('dashboard/buy-bitcoin', 'DashboardController@buybitcoin');
Route::get('dashboard/plan', 'DashboardController@plan');
Route::post('dashboard/plan', 'DashboardController@planPost');
Route::post('/buy-bitcoin', 'DashboardController@buyBit');
Route::post('/sell-crypto', 'DashboardController@sellCrypt');
Route::post('/plan', 'DashboardController@planCoin');
Route::post('/withdraw', 'DashboardController@withdrawCoin');
// Route::get('/welcome', function() {
//     return view('welcome');
// });

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', 'Admin\DashboardController@registerUser');
    Route::get('/user-edit/{id}', 'Admin\DashboardController@editUser');
    Route::patch('/updateusers/{id}', 'Admin\DashboardController@updateUser');
    Route::delete('/deleteusers/{id}', 'Admin\DashboardController@deleteUser');
});
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


