<?php

class Dm extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'dm';
	protected $primaryKey = 'dm_id';

	public $timestamps = false;

	public function state()
	{
		return $this->belongsTo('State');
	}
	public function dun()
	{
		return $this->belongsTo('Dun');
	}

}
