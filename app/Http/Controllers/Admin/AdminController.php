<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function showManageAdmin(){
        return view('admin.manageAdmin');
    }
    public function showCreateAdmin(){
        return view('admin.createAdmin');
    }
}
