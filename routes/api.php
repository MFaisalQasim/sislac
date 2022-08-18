<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\CytologySubitem;
use App\Cytology;
use App\Http\Controllers\CytologyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });




// Route::get('articles/{id}', function($id) {
//     return Article::find($id);
// });




Route::get('subitemlist/{id}', [CytologyController::class, 'subItem'])->name('subitemlist');

    Route::delete('delete-subitem/{id}', [CytologyController::class, 'destroySubItem'])->name('DeleteSubCytology');


