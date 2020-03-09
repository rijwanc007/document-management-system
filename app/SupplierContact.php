<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierContact extends Model
{
   protected $fillable=[
       'person_name',
       'designation',
       'phone',
       'email',
       'social_address',
       'address',
       'supplier_slug',
   ];
   protected $table = 'supplier_contacts';
}
