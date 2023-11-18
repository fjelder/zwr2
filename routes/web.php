<?php

use App\Http\Controllers\RailwaySwitchController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\LineController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Line;

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
    // return view('welcome');
    return redirect()->route('stations.index');
});
Route::resources([
    'stations' => StationController::class,
]);
Route::singleton('stations.railway-switches', RailwaySwitchController::class);
Route::resource('lines', LineController::class)->except([
    'show',
]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/search', function (Request $request) {
    return Line::search($request->search)->get();
});
