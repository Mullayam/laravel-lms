<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    public $timestapms = false;
    protected $fillable=[
        'name','video_id','course_id','section_id','link','type','category_id','details',
    ];

    public function getcourse()
    {
        return $this->belongsTo(Course::class, 'course_id','id');
    }
    public function videoSections()
    {
        return $this->hasMany(Section::class,'id','section_id');

    }
}
