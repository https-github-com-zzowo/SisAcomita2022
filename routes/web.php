<?php

use App\Http\Livewire\CrudActivity;
use App\Http\Livewire\CrudAssistence;
use App\Http\Livewire\CrudCollection;
use App\Http\Livewire\CrudEmpadronamiento;
use App\Http\Livewire\CrudFamily;
use App\Http\Livewire\CrudPartner;
use App\Http\Livewire\CrudPayment;
use App\Http\Livewire\CrudPeriod;
use App\Http\Livewire\CrudStand;
use App\Http\Livewire\Menuemp;
use App\Http\Livewire\Menufina;
use Illuminate\Support\Facades\DB;
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
    Route::get('/payment', CrudPayment::class)->name('payment');

    Route::get('/activity', CrudActivity::class)->name('activity');
    Route::get('/family', CrudFamily::class)->name('family');
    Route::get('/partner', CrudPartner::class)->name('partner');
    Route::get('/stand', CrudStand::class)->name('stand');
    Route::post('/stand', [CrudStand::class, 'store'])->name('stands.store');

    Route::get('/period', CrudPeriod::class)->name('period');
    Route::post('/period', [CrudPeriod::class, 'store'])->name('period.store');

    Route::get('/activity', CrudActivity::class)->name('activity');
    Route::post('/activity', [CrudActivity::class, 'store'])->name('activity.store');

    Route::get('/partner', CrudPartner::class)->name('partner');
    Route::post('/partner', [CrudPartner::class, 'store'])->name('partner.store');

    Route::get('/empadronamiento', CrudEmpadronamiento::class)->name('empadronamiento');
    Route::get('/menuemp',Menuemp::class)->name('menuemp');
    Route::get('/menufina',Menufina::class)->name('menufina');
    Route::get('/asistencia',CrudAssistence::class)->name('asistencia');


});

