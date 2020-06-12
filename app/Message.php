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
        return $this->id . ': ' . $this->message . ': ' . $this->user->name;
        // return $this->id . ': ' . $this->message;
    }

}
