<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function showManageAdmin(){
        $admins = Admin::all();
        return view('admin.manageAdmin', compact('admins'));
    }
    public function showCreateAdmin(){
        $admin = Admin::find(auth()->id());
        if ($admin->level == 1){
            return view('admin.createAdmin');
        }else{
            return view('admin.dontHaveAccess');
        }
    }
    public function storeAdmin(AdminRequest $request){
        $insert = Admin::create([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
            'level' => $request['level'],
        ]);
        if($insert){
            toastr()->success('ثبت ادمین موفق');
        }else{
            toastr()->error('ثبت ادمین ناموفق');
        }
        return redirect()->back();
    }
}
