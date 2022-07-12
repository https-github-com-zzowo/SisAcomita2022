<?php

use App\Http\Livewire\CrudActivity;
use App\Http\Livewire\CrudCollection;
use App\Http\Livewire\CrudPeriod;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/collection', CrudCollection::class)->name('collection');
    Route::get('/period', CrudPeriod::class)->name('period');
    Route::get('/activity', CrudActivity::class)->name('cactivity');

});

