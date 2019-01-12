<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thirdcategory extends Model
{
    public function topcategory()
    {
    	return $this->belongsTo('App\Topcategory');
    }
}
