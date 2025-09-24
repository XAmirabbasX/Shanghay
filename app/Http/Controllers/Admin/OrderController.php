<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::whereNull('deleted_at')->with('user')->get();
        return view('admin.manageOrder', compact('orders'));
    }
}
