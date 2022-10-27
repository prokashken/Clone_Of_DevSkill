<?php

namespace App\Http\Controllers;

use App\Enums\PaymentStatus;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AdminOrderController extends Controller
{
    public function index()
    {
        return view('admin.orders');
    }

    public function list()
    {
        return DataTables::of(Order::where('status',"!=",2))
        ->addIndexColumn()
        ->addColumn('created_by', function ($row){
            return view("admin.createdBy",compact('row'));   
            })
        ->addColumn('product_name', function ($row){
            return view("admin.productName",compact('row'));   
            })
        ->addColumn('product_price', function ($row){
        return view("admin.productPrice",compact('row'));   
        })
        ->addColumn('product_status', function ($row){
            return view("admin.productStatus",compact('row'));   
            })
        ->addColumn('product_delivered', function ($row){
        return view("admin.productDeliverd",compact('row'));   
        })
        ->make(true);
    }

    public function delivered($id)
    {
        $order = Order::find($id);
        $order->status = PaymentStatus::Delivered;
        $order->save();
        return redirect()->back();
    }
}
