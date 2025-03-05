<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends BaseModel
{
    public function university(){
        return $this->belongsTo(University::class,'university_id');
    }

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}