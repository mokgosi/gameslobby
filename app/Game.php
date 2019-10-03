<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';

    /**
     * @var array
     */
    protected $fillable = ['launchcode', 'name', 'game_provider_id', 'rtp'];

    /**
     * @var array
     */
    protected $hidden = [];

    public function gameProvider()
    {
        return $this->belongsTo(GameProvider::class);
    }

    public function brand()
    {
        return $this->hasOne(BrandGame::class, 'launchcode', 'launchcode');
    }

    public function gameBrandBlock()
    {
        return $this->belongsTo(GameBrandBLock::class, 'launchcode', 'launchcode');
    }

    public function gameCountryBlock()
    {
        return $this->belongsTo(GameCountryBLock::class, 'launchcode', 'launchcode');
    }
}
