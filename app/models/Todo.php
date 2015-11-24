<?php
class Todo extends Eloquent{
	protected $fillable = array('body','completed');
	public function getCompletedAttribute($value)
	{
		return (boolean)$value;		
	}
}