<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    public function images(){

    	return $this->belongsToMany('App\Images', 'galleriable', 'gallery_id', 'image_id');
    }

    public function news(){
    	
    	return $this->belongsToMany('App\News', 'news_gallery', 'gallery_id', 'news_id');
    }
}
