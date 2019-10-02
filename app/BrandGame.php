<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandGame extends Model
{
    protected $fillable = ['brandid', 'category', 'hot', 'new'];

    protected $hidden = [];

    public function game()
    {
        $this->belongsTo(Game::class, 'launchcode','launchcode');
    }
}
