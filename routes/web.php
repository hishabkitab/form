<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use HishabKitab\Form\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::prefix('form')->group(function() {
    Route::get('/', [FormController::class, 'index']);
});
