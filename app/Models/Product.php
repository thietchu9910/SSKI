<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'image_url',
        'price',
        'sale_percent',
        'stocks',
        'is_active'
    ];

    public function hasCmts(){
        return $this->hasMany(Comment::class, 'product_id', 'id');
    }

    public function hasCate(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
