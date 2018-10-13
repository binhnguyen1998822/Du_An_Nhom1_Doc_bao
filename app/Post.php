<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function auth()
    {
        return $this->belongsTo('App\User','author_ID','id');
    }
    public function cat()
    {
        return $this->belongsTo('App\Category','category_ID','id');
    }
}
