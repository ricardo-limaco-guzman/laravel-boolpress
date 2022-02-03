<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'subtitle', 'thumb', 'text', 'author_id', 'category_id'];

    public function user() {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }

    public function category (){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
