<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::prefix('delfosti')->group(function(){

    Route::group(['prefix' => 'articles'], function ($router) {
        Route::get('/search', 'ArticlesController@search');
    });

});

Route::fallback(function(){
    return response()->json([
        'message' => 'Acceso restringido'], 404);
});
