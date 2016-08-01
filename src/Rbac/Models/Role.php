<?php

namespace Rbac\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "rbac_roles";

    protected $fillable = [
        'name'
    ];

    public function objects()
    {
        return $this->belongsToMany(ProtectionObject::class, 'rbac_role_object', 'role_id', 'object_id');
    }

}