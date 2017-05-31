<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';

    public function news()
    {
    	/*
    	get all news by category 1
    	App\Category::find(1)->news()->orderBy('id', 'desc')->get();
		get all news from category 1 of user 1
		App\Category::find(1)->news()->where('user_id', 1)->get();
    	*/
        return $this->belongsToMany('App\News', 'category_news', 'category_id', 'news_id');
    }
}
