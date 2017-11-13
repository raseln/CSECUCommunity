<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\User;


class Post extends Model
{
    public function tags()
    {
      return $this->belongsToMany('App\Tag', 'post_tags');
    }

    public function user()
    
    {
         return $this->belongsTo('App\User');
    }
    public function comments()
    
    {
         return $this->hasMany('App\Comment');
    }

    public function replies()
    
    {
         return $this->hasMany('App\Reply');
    }
}
