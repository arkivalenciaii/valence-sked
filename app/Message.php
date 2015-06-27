<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function user()
    {
        return $this->belongsTo('User');
    }


    protected $table = 'messages';

    protected $fillable = ['message','from','user_id'];
}
