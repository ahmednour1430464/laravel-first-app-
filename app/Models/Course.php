<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table='courses';
    protected $fillable = ['title', 'info','duration','user_id'];

    static $rules = [
        'title' => ['required', 'string', 'max:255'],
        'info' => ['required', 'string', 'max:500'],
        'duration' => ['required', 'integer', 'max:20'],
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function feedbacks(){
        return $this->hasMany(Feedback::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
