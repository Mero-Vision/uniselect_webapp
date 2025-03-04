<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentTestScore extends BaseModel
{
    public function student()
    {
        return $this->belongsTo(User::class,'student_id');
    }
}