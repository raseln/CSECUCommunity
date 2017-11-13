<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts()
    {
          return $this->hasMany('App\Post');
    }

    public function jobs()
    {
          return $this->hasMany('App\Job');
    }

    public function jobcomments()
    {
          return $this->hasMany('App\Jobcomments');
    }

    public function questions()
    {
          return $this->hasMany('App\Question');
    }

    public function blogs()
    {
          return $this->hasMany('App\Blog');
    }

}
