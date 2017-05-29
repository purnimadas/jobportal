<?php


class Gender extends Eloquent {

	protected $table = 'gender';

	public $timestamps = false;
	protected $guarded = array();


    public function jobseekers()
    {
        return $this->hasMany('Jobseeker');
    }

}
