<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactManagement extends Model
{
protected $fillable=[
  'contact_pic','first_name','last_name','full_name','company','job_title','email_address','website','mobile',
    'home_phone', 'link_profile','facebook', 'skype','address_location','address_area_division','address_two','description'
];
protected $table= 'contact_managements';
}
