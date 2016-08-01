<?php

namespace Rbac\Models;

use Illuminate\Database\Eloquent\Model;

class Right extends Model
{
    protected $table = "rbac_rights";

    protected $fillable = [
        'name',
        'slug'
    ];

    public  function objects()
    {
        return $this->belongsToMany(ProtectionObject::class, 'rbac_object_right', 'right_id', 'object_id');
    }

}