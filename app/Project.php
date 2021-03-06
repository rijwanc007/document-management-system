<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{ 
     public function getRouteKeyName()
    {
        return 'slug';
    }
    public function suppliers(){
         return $this->belongsToMany(Supplier::class);
    }
    protected $table='projects';
}
