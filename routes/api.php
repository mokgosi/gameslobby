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
           ->limit(10)
           ->distinct()
           ->get();

       return $data;





//       return App\Game::addSelect(['last_flight' => function ($query) {
//           $query->select('name')
//               ->from('flights')
//               ->whereColumn('destination_id', 'destinations.id')
//               ->orderBy('arrived_at', 'desc')
//               ->limit(1);
//       }])->get();











//       return App\Game::with('gameProvider','brand', 'gameBrandBlock')->get();

   });
});

#g.launchcode, g.name, g.rtp, p.name, g.last_modified,
# bg.brandid, bg.category, bg.hot, bg.new, gbl.launchcode, gbl.brandid

/**
 *
 *
 *




 *


 *
 */
