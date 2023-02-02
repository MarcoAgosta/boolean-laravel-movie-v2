<?php

use App\Http\Controllers\ProfileController;
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




Route::middleware(['auth', 'verified'])
    ->prefix("admin") // porzione di uri che verrà inserita prima di ogni rotta
    ->name("admin.") // porzione di testo inserita prima del name di ogni rotta
    ->group(function () {
        Route::get('/', [ProjectController::class, "home"])->name('dashboard');
        Route::get('/users', [ProjectController::class, "home"])->name('users');
        Route::get('/pippo', [ProjectController::class, "home"])->name('pippo');

        Route::resource("posts", PostController::class);
    });
require __DIR__ . '/auth.php';
