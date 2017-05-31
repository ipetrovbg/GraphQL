<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paths extends Model
{
    protected $table = 'image_path';

    public function images(){
    	return $this->belongsTo('App\Images');
    }
}
