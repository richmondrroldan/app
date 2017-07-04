<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $fillable = ['title'];

    public function mentors(){

    	return $this->hasMany(Mentors::class);
    }
}
