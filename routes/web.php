<?php

use App\Http\Controllers\postController;
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

Route::get('',[postController::class, 'index'])->name('bien venu');
Route::get('/recherche',[postController::class, 'rechercher'])->name('une recherche');
Route::get('/inscription',[postController::class, 'inscription'])->name('une inscription');
Route::get('/connexion',[postController::class, 'connexion'])->name('une connexion');

