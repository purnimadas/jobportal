<?php


class Preferred extends Eloquent {

	protected $table = 'preferred';

    public $timestamps = false;
    protected $guarded = array();

	public static $rules = array();

    public function jobseeker()
    {
        return $this->belongsTo('Jobseeker');
    }

   
}
