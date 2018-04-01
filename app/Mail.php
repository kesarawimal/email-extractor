<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    # This property!
    protected $fillable = ['mail'];
    const TABLE_NAME = 'mail';
    protected $table = self::TABLE_NAME;

    public function paths() {
        return $this->belongsToMany('App\Path')->withTimestamps();
    }

    public function mailPaths(){
        return $this->belongsToMany('App\Path')->withPivot('id');
    }
}
