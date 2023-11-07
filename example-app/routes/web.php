<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/createTeam', [TeamController::class, 'create']);
Route::post('/storeTeam', [TeamController::class, 'store'])->name('teams.store');

Route::post('/storeMembers', [TeamMemberController::class, 'store'])->name('teammembers.store');
Route::get('/members', [TeamMemberController::class, 'index'])->name('teammembers.index');
Route::get('/createMember', [TeamMemberController::class, 'create']);
