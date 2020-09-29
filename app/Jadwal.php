<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $attributes = [
        'delayed' => false,
    ];

    protected $fillable = [
         'name','user_id'
    ];

    protected $hidden = [
        'id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function classroom(){
        return $this->hasMany('App\classroom');
    }
}
