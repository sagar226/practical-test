<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id', 'blog_id', 'comment','user_id'
    ];
    protected $with = ['user'];

    public function blog(){
        return $this->hasOne(Blog::class,'blog_id','id');
    }
    public function user(){
        return $this->hasOne(User::class,'id');
    }
}
