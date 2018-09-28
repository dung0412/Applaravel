<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "tbl_comment";
    public $timestamps = false;
    public function user()
    {
    	return $this->belongTo('App\User','user_id','id')
    }
}
