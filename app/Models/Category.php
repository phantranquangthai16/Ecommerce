<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class   Category extends Model
{
    use HasFactory;
public $timestamps = false;
protected $table='categories';
protected $fillable=[
    'tittle,description,name_inside,description_inside,image,status,order_category'
];
}
