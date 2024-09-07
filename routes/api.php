<?php

use App\Http\Controllers\OllamaController;
use Illuminate\Support\Facades\Route;

Route::post('/ask', [OllamaController::class, 'ask']);
