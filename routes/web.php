<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//rotta per pagina di amministrazione

//passiamo la nostra funzione di nome index
// Route::get('/admin', [DashboardController::class,'index'])->middleware(['auth']);

//fine rotta amministrazione

//guppo di pagine per l'amministrazione
//funzione usata per raggruppare tutte quelle pagine che vogliamo che siano esplorabili solo con un autenticazione
Route::middleware(['auth'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function (){

        Route::get('/', [DashboardController::class,'index'])->name('Dashboard');
        Route::get('/users', [DashboardController::class,'users'])->name('users');

        Route::resource('projects', ProjectController::class);

    });

//fine gruppo


