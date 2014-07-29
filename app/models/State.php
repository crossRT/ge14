<?php

class State extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'state';
	protected $primaryKey = 'state_id';

	public function duns()
	{
		return $this->hasMany('Dun');
	}
}
