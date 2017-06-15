<?php


class Education extends Eloquent {

	protected $table = 'education';

    public $timestamps = false;
    protected $guarded = array();

	public static $rules = array();

    public function user()
    {
        return $this->belongsTo('User');
    }

}
