<?php


class User extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	protected $table = 'user';

	public $timestamps = false;

	

}