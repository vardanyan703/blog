<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->hasOne(User::Class,'id','user_id');
    }

    public function histories()
    {
        return $this->hasMany(PostHistory::Class,'post_id','id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::Class,'post_id','id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::Class,'post_tags','post_id','tag_id');
    }

}
