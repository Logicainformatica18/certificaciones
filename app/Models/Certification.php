<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
     public function course()
    {

        return $this->hasOne('App\Models\Course', 'id','course_id');
    }
}
