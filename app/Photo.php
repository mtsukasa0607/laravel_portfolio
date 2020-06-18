<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getData()
    {
        return $this->id . ': ' . $this->user->name;
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
