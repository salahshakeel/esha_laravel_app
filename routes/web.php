<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/t',[TestController::class,'index'])->name('test.index');
// Route::post('/t',[TestController::class,'store'])->name('test.store');
// Route::get('/t/{employee}',[TestController::class,'destroy'])->name('test.destroy');

// Route::get('/t/edit/{employee}',[TestController::class,'edit'])->name('test.edit');
// Route::post('/t/update/{employee}',[TestController::class,'update'])->name('test.update');


require __DIR__.'/users.php';
require __DIR__.'/auth.php';