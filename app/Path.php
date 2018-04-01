<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    # This property!
    protected $fillable = ['domain_id','path'];
    protected $table = 'path';

    public function mails(){
        return $this->belongsToMany('App\Mail')->withTimestamps();
    }

    public function domain(){
        return $this->belongsTo('App\Domain');
    }

    public function mailPaths(){
        return $this->belongsToMany('App\Mail')->withPivot('id');
    }
}
