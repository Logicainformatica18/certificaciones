<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'alternative1','alternative2','alternative3','alternative4', 'image1','image2',
        'image3','image4','question_image','answer','detail','ask','certification_id' ,'file'];
        public function certification()
    {

        return $this->hasOne('App\Models\Certification', 'id','certification_id');
    }
    public function qualification()
    {

        return $this->belongsTo('App\Models\Qualification', 'id','exam_id');
    }
}
