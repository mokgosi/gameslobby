<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameBrandBLock extends Model
{
    protected $table = 'game_brand_block';

    protected $fillable = ['launchcode', 'brandid'];

    public function games()
    {
        return $this->hasMany(Game::class, 'launchcode', 'launchcode');
    }
}
