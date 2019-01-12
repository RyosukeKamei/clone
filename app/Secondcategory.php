<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secondcategory extends Model
{
    public function thirdcategory()
    {
    	return $this->belongsTo('App\Thirdcategory');
    }
}
