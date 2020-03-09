<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable=[
        'title','description','date','slug','user_id'
    ];
    protected $table='todos';
}
