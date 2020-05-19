<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['id', 'status_description'];

    public function task()
    {
        return $this->hasMany('App\Task');
    }
}
