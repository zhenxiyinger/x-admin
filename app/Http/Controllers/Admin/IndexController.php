<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuthAdmins;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return View('admin.index.index');
    }

    public function main()
    {
        $admin_id = Auth::guard('admin')->id();
        $admin_data = AuthAdmins::find($admin_id);
        $res = array(
            'admin_data' => $admin_data
        );
        return View('admin.index.main', $res);
    }

}
