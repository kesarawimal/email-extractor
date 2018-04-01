<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    # This property!
    protected $fillable = ['domain'];
    protected $table = 'domain';

    public function paths()
    {
        return $this->hasMany('App\Path');
    }
}
