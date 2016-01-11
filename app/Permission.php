<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    
  	public function roles()
    {
    	return $this->belongsToMany(Role::class);
    }

    public static function getAllLabels()
    {
    	return $users = \DB::table('permissions')->select('label')->get();
    }
}
