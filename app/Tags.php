<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    // protected $table = 'tags';

    public function news()
    {
    	/*
		get all news by this tag 
		App\Tags::find(1)->news
    	*/
        return $this->morphedByMany('App\News', 'taggable');
    }
}
