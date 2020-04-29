<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public $timestamps =false; 

    protected $fillable=[
                        
                        'postTitle',
                        'user_id',
                        'category_id',
                        'postDescription',
                        'postImage',
                        'postStatus',
                        'postDate'
                       ];

 //relation for post to user
    public function user()
    {
        return $this->belongsTo('App\User');
    }


//relation for post to category

  public function category()
  {
      return $this->belongsTo('App\category');
  }


 public function comments()
 {
     return $this->hasMany('App\Comment');
 }









}
