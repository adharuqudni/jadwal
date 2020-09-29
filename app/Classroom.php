<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'classname', 'teacher','class_starts','class_ends','day','jadwal_id'
    ];

    protected $hidden = [
        'id'
    ];

    public function jadwal(){
    	return $this->belongsTo('App\jadwal');
    }
}
