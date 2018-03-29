<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    protected $table = 'path';

    public function mails()
    {
        return $this->belongsToMany('App\Mail')
            ->withTimestamps();
    }

    public function domain()
    {
        return $this->belongsTo('App\Domain');
    }
}
