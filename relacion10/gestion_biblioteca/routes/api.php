<?php 

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;


Route::get('/books', [ApiController::class, 'index']);