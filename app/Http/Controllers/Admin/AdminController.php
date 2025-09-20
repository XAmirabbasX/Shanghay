<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
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
    public function storeAdmin(AdminRequest $request){
        $insert = Admin::create($request->all());
        if($insert){
            toaster()->success('درج ادمین موفق');
        }else{
            toaster()->success('درج ادمین ناموفق');
        }
        return redirect()->back();
    }
}
