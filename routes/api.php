<?php

use App\Game;
use Illuminate\Http\Request;

Route::group(['prefix' => 'v1'], function(){
   Route::get('/game', function () {

       $data = DB::table('game as g')
           ->leftJoin('game_providers as gp', 'gp.id', '=', 'g.game_provider_id')
           ->leftJoin('brand_games as bg', 'bg.launchcode', '=', 'g.launchcode')
           ->select('g.id','g.name', 'g.launchcode', 'g.rtp','g.last_modified',
               'gp.name as game_provider',
               'bg.category', 'bg.hot', 'bg.new')

           ->whereNotIn('bg.launchcode', DB::table('game_brand_block')->pluck('launchcode') )

           ->orderBy('g.last_modified')
           ->limit(25)
           ->distinct()
           ->get();

       return $data;
   });
});
