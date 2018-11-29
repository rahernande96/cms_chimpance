<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $guarded = [];

    public function scopeLang($query,$lang)
    {
    	if ($lang) 
    	{
    		return $query->where('lang',$lang);
    	}
    	
    }
}
