<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirstcategoryToKeyword extends Model
{
    protected $fillable = [
    	  'firstcategory_id'
    	, 'keyword_id'
    ];
}
