<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showOrders(){
        $orders = Order::whereNull('deleted_at')->with('user')->get();
        return view('admin.manageOrder', compact('orders'));
    }
    public function delete(string $id){
        //
    }
    public function details(string $id)
    {
        $orderInfo = Order::with('user')->find($id);
        return view('admin.orderDetails', compact('orderInfo'));
    }
    public function setPriority(string $id)
    {
        $result = Admin::findOrFail(auth()->id())->update(['priority' => $id]);
        if ($result) {
            session('admin')->update(['priority' => $id]);
            toastr()->success('با موفقیت به عنوان تحت پیگیری تنظیم شد');
        }else{
            toastr()->error('عملیات ناموفق');
        }
        return redirect()->back();
    }
    public function removePriority()
    {
        $result = Admin::findOrFail(auth()->id())->update(['priority' => null]);
        if ($result) {
            session('admin')->update(['priority' => null]);
            toastr()->success('با موفقیت از حالت تحت پیگیری در آمد');
        }else{
            toastr()->error('عملیات نا موفق');
        }
        return redirect()->route('admin.index');
    }
}
