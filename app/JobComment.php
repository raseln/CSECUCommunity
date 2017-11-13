<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobcomment extends Model
{
    public function jobs()
    {
    	return $this->belongsTo('App\Job');
    }

    public function user()
    
    {
         return $this->belongsTo('App\User');
    }

}
