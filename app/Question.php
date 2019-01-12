<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{  
	
	public function round()
    {
        return $this->belongsTo('App\Round');
    }
    public function examination()
    {
    	return $this->belongsTo('App\Examination');
    }
    public function firstcategory()
    {
    	return $this->belongsTo('App\Firstcategory');
    }
}
