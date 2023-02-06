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
        'slug',
    ];

    public function course(){
        return $this->hasMany(Course::class, 'category_id','id');
    }

    public function books(){
        return $this->hasMany(Book::class,'category_id','id');

    }
}
