<?php

use App\Http\Controllers\BidController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
// Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
// Route::get('/projects/{project}/bids/create', [BidController::class, 'create'])->name('bids.create');
// Route::post('/projects/(project}/bids', [BidController::class, 'store'])->name('bids.store');

// Route::get('/register', [UserController::class,'create'])->name('users.create');
// Route::post('/register', [UserController::class, 'store'])->name('users.store');

Route::get('/boss/{user}/projects', [ProjectController::class, 'bossProjects']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{project}/bids', [BidController::class, 'showBids']);

Route::get('/freelancer/{user}/bids', [BidController::class, 'freelancerBids'])->name('freelancer.bids');
Route::post('/projects/{project}/bids', [BidController::class, 'store']);
Route::get('/bids/{bid}/edit', [BidController::class, 'edit']);
Route::put('/bids/{bid}', [BidController::class, 'update']);

Route::post('/bids/{bid}/assign', [BidController::class, 'assign']);