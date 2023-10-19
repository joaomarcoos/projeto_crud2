<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JogoController;
use Faker\Guesser\Name;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return Inertia::render('Layout/Main');
})->name('main');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('jogos')->group(function () {
    
    Route::get('/', [JogoController::class, 'index'])->name('jogos.index');

    Route::get('/create', [JogoController::class, 'create'])->name('jogos.create');

    Route::post('/', [JogoController::class,'store'])->name('jogos.store');

});


Route::fallback(function(){
    return "Erro ao encontrar a rota";
});

require __DIR__.'/auth.php';
