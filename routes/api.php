<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1'], function(){
   Route::get('/games', function () {
       return App\Game::with('gameProvider','brand')->latest()->get();
   });
});
