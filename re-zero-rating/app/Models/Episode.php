<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['number', 'title'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}