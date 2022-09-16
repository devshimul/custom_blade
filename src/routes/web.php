<?php

use Devshimul\CustomBlade\Http\Controllers\CustomBladeController;
 
 
Route::get('testing', [CustomBladeController::class, 'index']); 

Route::post('test/post', [CustomBladeController::class, 'storeTest'])->name('test.post');