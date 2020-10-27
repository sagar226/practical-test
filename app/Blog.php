<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'category', 'desc'
    ];

    public function comments(){
        return $this->hasMany(Comment::class,'blog_id','id');
    }
}
