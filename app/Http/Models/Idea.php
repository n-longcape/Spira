<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}