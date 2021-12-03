<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');


Route::middleware(['auth'])->group(function () {
    // Agent Routes
    Route::get('dashboard/agent/create', [AgentController::class, 'create'])->name('agent-create');
    Route::post('dashboard/', [AgentController::class, 'store'])->name('agent-store');
    Route::get('dashboard/agents', [AgentController::class, 'index'])->name('agents-list');
    Route::get('dashboard/agent/{user}/edit/', [AgentController::class, 'edit'])->name('agents-edit');
    Route::patch('dashboard/{user}', [AgentController::class, 'update'])->name('agents-update');
    Route::delete('dashboard/{user}/delete', [AgentController::class, 'destroy'])->name('agents-destroy');
});

Route::middleware(['auth'])->group(function () {
    // Properties Routes
    Route::get('dashboard/property/create', [PropertyController::class, 'create'])->name('property-create');
    Route::post('/dashboard', [PropertyController::class, 'store'])->name('property-store');
});


Route::get('/dashboard', [BasicController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
