<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\EventController;
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

Route::get('list','App\Http\Controllers\Users@list');

// Route::get('/report', [UserController::class, 'index']);
// Route::get('/report', [ReportController::class, 'index']);

// Route::get('/report/{id}', [UserController::class, 'show']);

Route::get('/report/comment', function () {
    return view('report.comment');
});

// Route::get('/event', function () {
//     return view('event.index');
// });

// Route::get('/event/create', function () {
//     return view('event.create');
// });

// Route::get('/event/comment', function () {
//     return view('event.comment');
// });

Route::get('/info', function () {
    return view('info.index');
});


Route::get('/userprofile','App\Http\Controllers\UsersController@list', function () {
    return view('profile.userprofile');
});

Route::get('/communityprofile','App\Http\Controllers\CommunityController@list', function () {
    return view('community.communityprofile');
});

Route::post('/userprofile','App\Http\Controllers\Users@updateAvatar');



Route::get('/dashboard', function () {
    return redirect('/report');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/report', function () {
//     return view('report.index');
// })->name('dashboard');

Route::resource('todo', TodoController::class)->middleware('auth:sanctum');
Route::resource('report', ReportController::class)->middleware('auth:sanctum');
Route::resource('event', EventController::class)->middleware('auth:sanctum');

