<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['id', 'task_name', 'task_description'];

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

}
