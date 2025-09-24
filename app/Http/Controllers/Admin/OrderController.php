<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
