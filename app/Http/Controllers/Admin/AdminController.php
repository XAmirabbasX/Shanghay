<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Works;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function index(){
        $admin = session('admin');
        $orderInfo = null;
        if ($admin && $admin->priority != null) {
            $orderInfo = Order::findOrFail($admin->priority);
        }
        $works = Works::where('admin_id', auth()->id())->get();
        View::share('works', $works);
        return view('admin.index', compact('orderInfo'));
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
