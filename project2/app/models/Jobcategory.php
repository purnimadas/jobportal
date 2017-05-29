<?php

class Jobcategory extends Eloquent {
	
   protected $table = 'jobcategory';

	public $timestamps = false;
	
	protected $guarded = array();

	public function jobs()
	   {
	   	return $this->hasMany('Job');
	   }
     
    
}