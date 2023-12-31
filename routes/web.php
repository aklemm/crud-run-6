<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Items\IndexController as ItemsIndexController;
use App\Http\Controllers\Items\CreateController as ItemsCreateController;
use App\Http\Controllers\Items\StoreController as ItemsStoreController;
use App\Http\Controllers\Items\ShowController as ItemsShowController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/items', ItemsIndexController::class)->name('items.index');
    Route::get('/items/create', ItemsCreateController::class)->name('items.create');
    Route::post('/items', ItemsStoreController::class)->name('items.store');
    Route::get('/items/{item}', ItemsShowController::class)->name('items.show');
});

require __DIR__.'/auth.php';
