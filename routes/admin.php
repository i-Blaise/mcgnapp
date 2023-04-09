<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;




Route::get('admin/home', [AdminHomeController::class, 'indexPage'])->name('home');