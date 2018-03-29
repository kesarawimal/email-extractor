<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = 'mail';

    public function paths()
    {
        return $this->belongsToMany('App\Path')
            ->withTimestamps();
    }
}
