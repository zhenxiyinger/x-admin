<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class AuthAdmins extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use HasRoles;

    protected $guard_name = 'admin';
}
