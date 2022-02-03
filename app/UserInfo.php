<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = "users_info";
    
    protected $fillable = ['phone', 'address', 'avatar', 'cover'];
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
