<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = [
        'course_name', 'thumbnail',
         'category_id', 'subcat_id',
          'course_length', 'total_lecture',
           'price',

    ];

    public function details()    {
        return $this->hasOne(Course_Detail::class,'course_id','id');
    }
    public function category()    {

        return $this->belongsTo(Category::class,);
    }
    public function sections()
    {
        return $this->hasMany(Section::class, 'course_id', 'id');
    }
    public function checkEnroll()
    {
        return $this->hasMany(EnrollUser::class, 'course_id', 'id');
    }
    public function getVideos()
    {
        return $this->hasMany(Video::class, 'course_id', 'id');
    }
    public static function getDetails()
    {
        return DB::table('courses')->where("is_active",'=',1)->leftJoin('course_details', 'course_details.id', '=', 'courses.id')
        ->select('courses.id', 'courses.course_name','courses.content_id', 'courses.thumbnail', 'courses.course_length','courses.add_by','courses.total_lecture', 'courses.price', 'courses.is_free', 'courses.is_new', 'course_details.short_desc', 'course_details.level')
        ->paginate(7);
    }
}
