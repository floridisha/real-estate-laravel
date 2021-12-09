<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'home'])->name('home');
Route::get('/about', [BasicController::class, 'about'])->name('about');
Route::get('/contact', [BasicController::class, 'contact'])->name('contact');
Route::get('/properties', [BasicController::class, 'properties'])->name('properties-list');
Route::get('/agents-list', [BasicController::class, 'agentList'])->name('agents-listing');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [BasicController::class, 'dashboard'])->name('dashboard');

    // Agent Routes
    Route::get('dashboard/agent/create', [AgentController::class, 'create'])->name('agent-create');
    Route::post('dashboard/', [AgentController::class, 'store'])->name('agent-store');
    Route::get('dashboard/agents', [AgentController::class, 'index'])->name('agents-list');
    Route::get('dashboard/agent/{user}/edit/', [AgentController::class, 'edit'])->name('agents-edit');
    Route::patch('dashboard/{user}', [AgentController::class, 'update'])->name('agents-update');
    Route::delete('dashboard/{user}/delete', [AgentController::class, 'destroy'])->name('agents-destroy');

    // Properties
    Route::resource('dashboard/properties', PropertyController::class)->except('show');
});

require __DIR__.'/auth.php';
