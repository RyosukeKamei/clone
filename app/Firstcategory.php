<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firstcategory extends Model
{
    public function secondcategory()
    {
    	return $this->belongsTo('App\Secondcategory');
    }
}
