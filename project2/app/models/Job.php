<?php


class Job extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	protected $table = 'job';

	public $timestamps = false;

	public function jobcategory()
    {
        return $this->belongsTo('Jobcategory');
    }

}
