<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public function Qcategory(){
        return $this->belongsTo(QuestionCategory::class,'que_cat_id','id');
    }
}
