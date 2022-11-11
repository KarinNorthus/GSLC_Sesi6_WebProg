<?php

use App\Http\Controllers\ItemController;
use App\Models\items;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/home', function(){
//     $arrItems = items::all();

//     return view('home')
//     ->with('items', $arrItems);
//     //nama variabel, isi
// });

Route::get('/home',[ItemController::class, 'index'] );
