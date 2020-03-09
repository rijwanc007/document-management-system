<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierCategory extends Model
{
   protected $fillable=[
       'title',
       'slug',
       'description',
   ];
   protected $table='supplier_categories';
}
