<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'parent_id'
    ];

    public function hasProducts(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function hasParentCate(){
        return $this->hasOne(Category::class, 'parent_id', 'id');
    }
}
