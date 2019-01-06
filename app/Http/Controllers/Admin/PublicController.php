<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->session()->put('admin_id', 1);
            $res = array(
                'status' => 1,
            );
            return $res;
        } else {
            return View('admin.login');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin_id');
        return redirect('/admin/login');
    }
}
