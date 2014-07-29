<?php

class Dun extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'dun';
	protected $primaryKey = 'dun_id';

	public function state()
	{
		return $this->belongsTo('State');
	}

}
