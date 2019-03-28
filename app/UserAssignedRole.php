<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAssignedRole extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function role()
    {
    	return $this->belongsTO('App\UserRole', 'user_role', 'id');
    }
}
