<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = ['number', 'title'];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}