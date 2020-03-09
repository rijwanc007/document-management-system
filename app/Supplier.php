<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'supplier_name',
        'supplier_logo',
        'supplier_description',
        'supplier_phone',
        'supplier_email',
        'supplier_social_address',
        'supplier_web_address',
        'supplier_address',
        'supplier_category',
        'category_id',
        'supplier_file_number',
        'supplier_slug',
        ];
    protected $table = 'suppliers';
}
