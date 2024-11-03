<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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



Route::get('/', [UserController::class, 'index']); // Afficher la page d'accueil
Route::post('/apiUsers/storeUsers', [UserController::class, 'store'])->name('store'); // Enregistrer l'utilisateur
Route::get('/apiUsers/showUsers', [UserController::class, 'show'])->name('show.users'); // Afficher les utilisateurs
Route::get('/apiUsers/formulaire', [UserController::class, 'form'])->name('form'); // Afficher le formulaire
Route::post('/apiUsers/searchUsers', [UserController::class, 'search'])->name('search'); // chercher les utilisateurs
Route::post('/apiUsers/researchUsers', [UserController::class, 'research'])->name('research'); // chercher les utilisateurs
