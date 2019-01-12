<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfterQuestion extends Model
{
    protected $fillable = [
    	  'number'
    	, 'body'
    	, 'commentary'
    	, 'thirdcategory_id'
    	, 'divition_id'
    	, 'round_id'
    	, 'examination_id'
    ];
    
    public function round()
    {
        return $this->belongsTo('App\Round');
    }
    public function examination()
    {
        return $this->belongsTo('App\Examination');
    }
    public function thirdcategory()
    {
        return $this->belongsTo('App\Thirdcategory');
    }    
}
