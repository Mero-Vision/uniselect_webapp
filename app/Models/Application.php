<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Application extends BaseModel implements HasMedia
{

    use InteractsWithMedia;
    
    public function university(){
        return $this->belongsTo(University::class,'university_id');
    }

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
    
    public function student(){
        return $this->belongsTo(User::class,'student_id');
    }
}