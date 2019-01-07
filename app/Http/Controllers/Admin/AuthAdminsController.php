<?php

namespace App\Http\Controllers\Admin;

use App\Models\AuthAdmins;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        if($request->isMethod('post')){
            $admin_data = $request->only(['username','password','real_name','mobile']);
            $authAdmin = new AuthAdmins;
            $authAdmin->username = $admin_data['username'];
            $authAdmin->password = bcrypt($admin_data['password']);
            $authAdmin->real_name = $admin_data['real_name'];
            $authAdmin->mobile = $admin_data['mobile'];
            $authAdmin->last_ip = '';
            $authAdmin->status = 1;
            $authAdmin->save();
            $result = array(
                'status'=>1
            );
            return $result;
        }else{
            return View('admin.auth_admins.add');
        }
    }
}
