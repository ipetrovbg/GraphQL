<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    public function news()
    {
    	/*
			get news by this comment
			App\Comments::find(1)->news;
    	*/
        return $this->belongsTo('App\News');
    }

    public function user()
    {
    	/*
			get author of comment
			App\Comments::find(1)->user;
    	*/
        return $this->belongsTo('App\User');
    }

    public function replay(){
    	/*
	    	get all replay by comment 1
	    	App\Comments::find(1)->repley()->get();
    	*/
    	return $this->hasOne('App\Comments', 'replay_id');
    }
}
