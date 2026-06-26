<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['number', 'title', 'season_id'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}