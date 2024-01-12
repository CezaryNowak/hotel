<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');
Route::get('/dashboard', function () {
    return redirect()->route('home');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
Route::get('/room/{id}', [RoomController::class, 'show', 'id'])->name('room');
Route::get('/example', function () {
    return view('example');
});
//Route::get('/rooms', [HomeController::class, 'index'])->name('rooms');
//Route::get('/rooms/{inDate?}/{outDate?}', [RoomController::class, 'getroom','inDate,'outDate',])->name('rooms);
//Route::get('/rooms/{id?}', [RoomController::class, 'getroom','id',])->name('room');
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::view('example', 'example');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/reservations', [ReservationController::class, 'show'])->name('reservations.show');
    Route::delete('/reservations', [ReservationController::class, 'destroy'])->name('reservations.destroy');
    Route::post('/reservations', [ReservationController::class, 'create'])->name('reservations.create');
});

require __DIR__.'/auth.php';
