<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'user_id',
        'product_id',
        'content'
    ];

    public function hasUser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function hasProduct(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
