<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counts extends Model
{
	public function countable()
    {
        return $this->morphTo();
    }
}
