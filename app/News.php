<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	// protected $table = 'news';
    protected $fillable = [
        'user_id', 'title', 'content', 'publish_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // public function category()
    // {
        /*get all news with user and category information
		 App\News::with(['user', 'category'])->get();

		select all news with user and category info where category id = 1
		App\News::with(['user', 'category'])->whereHas('category', function($q){$q->where('category_id', '=', 1);})->get();

		get all news with users and categories where user has role 2
		App\News::with(['user', 'category'])->whereHas('user', function($q){$q->where('role', '=', 2);})->get();

		get all news with users and category info where category_id = 1 or user role = 1
		App\News::with(['user', 'category'])->whereHas('category', function($q){$q->where('category_id', '=', 1);})->whereHas('user', function($q){ $q->where('role', 1); })->get();


        */
        // return $this->belongsToMany('App\Category', 'category_news', 'news_id', 'category_id');
    // }



    // public function comments(){
    	/*
    	get all news where has comments
    	App\News::has('comments')->with(['comments'])->get()
    	*/
    	// return $this->hasMany('App\Comments');
    // }

    // public function tags()
    // {
    	/*
			get all tags of this news
			App\News::find(1)->tags
    	*/
    //     return $this->morphToMany('App\Tags', 'taggable');
    // }

    // public function counts()
    // {
    	/*
    		get all visit to this news
			App\News::find(1)->counts()->count();
    	*/
    // 	return $this->morphMany('App\Counts', 'countable');
    // }

    // public function images()
    // {
    	/*
			get all images with there paths of this news
			App\News::find(1)->images()->with(['paths'])->get()

    	*/
        // return $this->morphToMany('App\Images', 'imageable');
    // }

    // public function gallery()
    // {
    //     return $this->belongsToMany('App\Gallery', 'news_gallery', 'gallery_id', 'news_id');
    // }

}
