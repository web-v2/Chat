<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model{
    use HasFactory;
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['created_at','updated_at'];

    public function users(){
    	return $this->belongsToMany('App\Models\User');
    }

    public function messages(){
    	return $this->hasMany('App\Models\Message');
    }
}
