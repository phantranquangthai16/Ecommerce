<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_code',
        'category_id',
        'brand',
        'price',
        'description',
        'updated_at',
        'created_at',
        'image',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
