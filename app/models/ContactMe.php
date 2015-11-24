<?php

class ContactMe extends Eloquent{
	protected $fillable = array('user_id','subject','message','status');
	protected $table ='contact_me';
}