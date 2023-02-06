<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_Detail extends Model
{
    use HasFactory;

    protected $table = 'course_details';
    protected $fillable = [
        'course_id', 'short_desc', 'tags',
        'level', 'language', 'requirements',
        'links', 'index_list', 'seo'
    ];



    public function course()
    {
        return $this->belongsTo(Course::class, 'id', 'course_id');
    }
}
