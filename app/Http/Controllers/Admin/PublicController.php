<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $authData = $request->only(['username', 'password']);
            $authData['status'] = '1';
            if (Auth::guard('admin')->attempt($authData, false)) {
                $result = array(
                    'status' => 1
                );
            } else {
                $result = array(
                    'status' => 0,
                    'msg' => '用户名或密码错误',
                );
            }
//            return redirect()->intended('dashboard');
            return $result;
        } else {
            return View('admin.login');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }
}
