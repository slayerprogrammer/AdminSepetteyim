<?php

namespace App\Models\Role;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Role extends Model
{
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
