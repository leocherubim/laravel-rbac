<?php

namespace Rbac\Models;

use Illuminate\Database\Eloquent\Model;

class ProtectionObject extends Model
{
    protected $table = "rbac_protection_objects";

    protected $fillable = [
        'name'
    ];

    public  function roles()
    {
        return $this->belongsToMany(Role::class, 'rbac_role_object', 'object_id', 'role_id');
    }

    public  function rights()
    {
        return $this->belongsToMany(Right::class, 'rbac_object_right', 'object_id', 'right_id');
    }

}