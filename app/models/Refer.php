<?php

class Refer extends Eloquent{

	protected $fillable = array('user_id','site_name','refer','click','amount');

	protected $table = 'refers';

}