<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'user_id' => 'required',
        'message' => 'required',
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getData()
    {
        return $this->message;
        // return $this->id . ': ' . $this->message . ': ' . $this->user->name;
    }

    public function getMessage()
    {
        return $this->message;
        // return $this->id . ': ' . $this->message . ': ' . $this->user->name;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

}
