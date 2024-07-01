<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;



Route::controller(AdminController::class)
->prefix('admin')
->as('admin.')
->group(function(){

    Route::get('/dashboard','AdminDashboard')->name('dashboard');

});

require __DIR__.'/auth.php';