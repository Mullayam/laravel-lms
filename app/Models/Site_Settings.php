<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site_Settings extends Model
{
    use HasFactory;
    protected $table ="site_settings";
    public $timestamps = false;
    protected $fillable = [
        'field',
        'content',
    ];
    protected $casts = [
        'content'=>"array"
    ];

}
