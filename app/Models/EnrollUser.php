<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollUser extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "enroll_users";
    protected $fillable = ['course_id', 'user_id'];

    public function enrolledCourse()
    {
        return $this->belongsTo(Course::class,'course_id','id');
    }
    public function enrolledUser()
    {
        return $this->belongsTo(User::class);
    }

}
