<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ThirukkuralController;

Route::get('thirukkural/{number}', [ThirukkuralController::class, 'show']);
Route::get('thirukkurals/search', [ThirukkuralController::class, 'search']);
