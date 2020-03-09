<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTodo extends Model
{
    protected $fillable=[
        'title','description','date','slug','project_id'
    ];
    protected $table='project_todos';
}
