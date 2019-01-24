<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthPermissionsController extends Controller
{
    public function index()
    {
        $permission_list = Permission::all(); // 获取所有角色
        $result = array(
            'permission_list' => $permission_list
        );
        return View('admin.auth_permissions.index', $result);
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|max:40',
            ]);
            Role::create(['name' => $request['name'], 'guard_name' => 'admin']);
            $res = array(
                'status' => 1
            );
            return $res;
        } else {
            return View('admin.auth_permissions.add');
        }
    }

}
