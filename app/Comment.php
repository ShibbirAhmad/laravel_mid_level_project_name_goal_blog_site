<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
      public function user()
      {
          return $this->belongsTo('App\User');

      }

    public function post()
    {
        return $this->hasMany('App\post');
    }
     



      protected $fillable=['post_id','user_id','comment','status'];
}
