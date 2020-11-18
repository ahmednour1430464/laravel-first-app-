<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "feedbacks";
    protected $fillable=['title','body','course_id','student_id'];

    static $rules=[
        'title'=>'required',
        'body'=>'required'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'student_id');
    }
    
}
