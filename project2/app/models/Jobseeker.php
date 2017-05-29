<?php


class Jobseeker extends Eloquent {

	protected $table = 'jobseeker';

    public $timestamps = false;
    protected $guarded = array();


    public function educations()
    {
        return $this->hasMany('Education');
    }

    public function references()
    {
        return $this->hasMany('Reference');
    }

     public function preferred()
    {
        return $this->hasMany('Preferred');
    }

    public function gender()
    {
        return $this->belongsTo('gender');
    }

}
