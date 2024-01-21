<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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

use Illuminate\Http\Request;

// class TestController extends Controller 
// {
//     public function show() {
//         return Inertia::render('Home');
//     }
// }

Route::get('/', function () {
    return Inertia::render('Home');
});

// Route::group([
//     "middleware" => ["auth"],
// ], function(){
//     Route::get('/', 'TestController@show');
// });