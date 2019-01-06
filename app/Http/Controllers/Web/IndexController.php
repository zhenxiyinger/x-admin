<?php

namespace App\Http\Controllers\Web;

use App\Models\AuthAdmins;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

}
