<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthAdminsController extends Controller
{
    public function index()
    {
        return View('admin.auth_admins.index');
    }

    public function add()
    {
        return View('admin.auth_admins.add');
    }
}
