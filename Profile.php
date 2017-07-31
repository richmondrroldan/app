<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $fillable = [''];

    public function user(){
    	$this->belongsTo(User::class);
    }
}
