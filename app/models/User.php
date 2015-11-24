<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    protected  $fillable = array('email','username','password','password_temp','code','active');

	protected $table = 'users';

	protected $hidden = array('password', 'remember_token');

	public function Coin(){
		return $this->hasOne('Coin');
	}
	public function refers(){
		return $this->hasMany('Refer');
	}
       public function roles()
        {
            return $this->belongsToMany('Role');
        }

        public function hasRole($name)
        {
            foreach($this->roles as $role)
            {
                if($role->name === $name) return True;
            }
            return False;
        }

        public function assignRole($role)
        {
            return $this->roles()->attach($role);
        }

        public function removeRole($role)
        {
            $this->roles()->detach($role);
        }

}
