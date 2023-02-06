<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $table = 'sections';

    protected $fillable = [
        'section_title',
        'course_id',

    ];
    public function getCourse(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
    public function sectionVideos()
    {
        return $this->belongsTo(Video::class, 'id', 'section_id');

    }

}
