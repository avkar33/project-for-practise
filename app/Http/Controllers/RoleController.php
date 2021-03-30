<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function show(Role $role, $roleId)
    {
        $role = Role::find($roleId)->first();
        dd($role->users);
    }
}
