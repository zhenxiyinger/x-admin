<?php

namespace App\Http\Controllers\Admin;

use App\Models\AuthAdmins;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AuthAdminsController extends Controller
{
    public function index()
    {
        $admin_list = AuthAdmins::all();
        $result = array(
            'admin_list' => $admin_list
        );
        return View('admin.auth_admins.index', $result);
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $param_data = $request->only(['username', 'password', 'real_name', 'mobile', 'role_id']);
            $admin_data = new AuthAdmins;
            $admin_data->username = $param_data['username'];
            $admin_data->password = bcrypt($param_data['password']);
            $admin_data->real_name = $param_data['real_name'];
            $admin_data->mobile = $param_data['mobile'];
            $admin_data->last_ip = '';
            $admin_data->status = 1;
            $admin_data->save();

            $role_data = Role::find($param_data['role_id']);
            $admin_data->assignRole($role_data);

            $res = array(
                'status' => 1
            );
            return $res;
        } else {
            $role_list = Role::all();
            $res = array(
                'role_list' => $role_list
            );
            return View('admin.auth_admins.add', $res);
        }
    }
}
