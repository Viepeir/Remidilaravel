<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('welcome');
});

// Route::get('/blog', function () {
//     // ambil data dari database
//     $profile = 'aku progamer noob';
//     return view ('blog', ['data' => $profile]);
// })->name('blog');

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/{id}', function (Request $request) {
    // $name = $request->name;
    // $password = $request->$password;

    //anggap aja melakukan update data & berhasil
    return redirect()->route('blog');
    // return 'ini adalah blog '.$request->id;
});