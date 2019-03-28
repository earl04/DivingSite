<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $guarded = [];

    public function user_roles()
    {
        return $this->hasMany('App\UserAssignedRole', 'user_role', 'id');
    }
}
