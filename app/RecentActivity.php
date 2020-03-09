<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecentActivity extends Model
{
    protected $fillable=[
      'user_id','user_pic','first_name','last_name','deleted_first_name','deleted_last_name','deleted_status','ip_address'
    ];
    protected $table='recent_activities';
}
