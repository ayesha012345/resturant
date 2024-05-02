<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

    route::get("/",[HomeController::class,"index"]);

Route::middleware([
    'auth:sanctum',
   'verified'
])->get('/dashboard', function () {
        return redirect('home');
    })->name('dashboard');
