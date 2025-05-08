<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoatController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/boats/{id}', [BoatController::class, 'show'])->name('boats.show');

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/detail/superior/amore', [HomeController::class, 'detailAmore'])->name('detail.amore');

Route::get('/detail/superior/superior02', [HomeController::class, 'detailSuperior02'])->name('detail.superior02');

Route::get('/detail/superior/superior03', [HomeController::class, 'detailSuperior03'])->name('detail.superior03');

Route::get('/detail/deluxe/deluxe01', [HomeController::class, 'detailDeluxe01'])->name('detail.deluxe01');

Route::get('/detail/deluxe/deluxe02', [HomeController::class, 'detailDeluxe02'])->name('detail.deluxe02');

Route::get('/detail/deluxe/deluxe03', [HomeController::class, 'detailDeluxe03'])->name('detail.deluxe03');

Route::get('/detail/luxury/luxury01', [HomeController::class, 'detailLuxury01'])->name('detail.luxury01');

Route::get('/detail/luxury/luxury02', [HomeController::class, 'detailLuxury02'])->name('detail.luxury02');

Route::get('/detail/luxury/luxury03', [HomeController::class, 'detailLuxury03'])->name('detail.luxury03');

Route::get('/boats', [BoatController::class, 'index'])->name('boats.index');

Route::get('/boats/category/{category}', [BoatController::class, 'filterByCategory'])->name('boats.category');

Route::get('/boats/departure/{departure}', [BoatController::class, 'filterByDeparture'])->name('boats.departure');

Route::get('/ship/{id}', [ShipController::class, 'show'])->name('ship.detail');

use App\Http\Controllers\AdminController;

Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class, 'login']);

Route::middleware('auth')->get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

use App\Http\Controllers\AdminBoatController;
use App\Http\Controllers\AdminCabinController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware('auth')->group(function () {
    Route::resource('admin/boats', AdminBoatController::class)->names('admin.boats');
    Route::resource('admin/cabins', AdminCabinController::class)->names('admin.cabins');
    // Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('kapal', KapalController::class);
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
