<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    public $table='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'role', 'avatar', 'provider_id', 'provider', 'access_token'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //You can also use below statement
    static $rules = [
        'name' => 'required',
        'email' => 'required',
    ];

    protected $guarded = ['*'];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function feedbacks(){
        return $this->hasMany(Feedback::class);
    }
    public function created_courses(){
        return $this->hasMany(Course::class);
    }
    

}
