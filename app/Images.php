<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    public function paths(){
    	return $this->hasMany('App\Paths', 'image_id');
    }

    public function news()
    {
    	/*
		get all news by this tag 
		App\Tags::find(1)->news

		get all news for this image and there paths
		App\Images::find(1)->news()->with('images.paths')->get()
    	*/
        return $this->morphedByMany('App\News', 'imageable');
    }

    public function user(){
    	return $this->morphedByMany('App\User', 'imageable');	
    }
}
