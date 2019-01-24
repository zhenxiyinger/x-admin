<?php

namespace App\Http\Controllers\Web;

use App\Models\AuthAdmins;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $admin_data = AuthAdmins::where('username', 'aaa')
            ->where('password', 'aaa')
            ->first();
        $permissions = $admin_data->getAllPermissions();
        dump($permissions);
    }

    public function test(Request $request){
        $res = [
           'cash_url'=>'http://47.104.232.195:21111/credit/web'
        ] ;
        return View('test',$res);
    }

}
