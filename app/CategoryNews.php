<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryNews extends Model
{
    protected $table = 'category_news';

    public function category()
    {
        return $this->belongsToMany('App\Category');
    }
}
