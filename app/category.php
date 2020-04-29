<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $timestamps= false;

    protected $fillable=['categoryName'];




public function post()
{
    return $this->hasMany('App\post');
}






}