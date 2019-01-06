<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return View('admin.index');
    }

    public function welcome()
    {
        return View('admin.welcome');
    }

}
