<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    public $fillable = ['name', 'skills_title', 'shortBio'];

    public function skills(){

    	return $this->belongsTo(Skill::class);
    }
}
