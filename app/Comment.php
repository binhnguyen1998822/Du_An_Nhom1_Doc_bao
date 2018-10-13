<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function auth()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
