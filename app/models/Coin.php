<?php

class Coin extends Eloquent {
        
    protected  $fillable = array('user_id','coins');

	protected $table = 'coins';

	public function user(){
		return $this->belongsTo('User');
	}
}
