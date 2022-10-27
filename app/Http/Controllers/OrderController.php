<?php

namespace App\Http\Controllers;

use App\Enums\PaymentStatus;
use App\Http\Requests\ShippinRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function store(ShippinRequest $request)
    {
        $product = Product::find($request->ProductId);
        $user = User::find(Auth::id());
        $order = new Order();
        $order->created_by = $user->id;
        $order->product_id = $request->ProductId;
        $order->amount = $product->price;
        $order->status = PaymentStatus::Pending;
        $order->invoice_number = uniqid("INV");
        $order->shipment_address = $request->Address;
        $order->save();

        if ($user->mbl_number == null) {
            $user->mbl_number = $request->Phone;
            $user->save();
        }
         if ($user->name == null) {
            $user->name = $request->FullName;
            $user->save();
        }

        $user->devcoin->coin = $user->devcoin->coin - $product->price;
        $user->devcoin->save();
        
        return view('user.my_profile',compact("order"));

        
    }

    public function list()
    {
        return DataTables::of(Order::where('created_by',Auth::id()))
        ->addIndexColumn()
        ->addColumn('product_name', function ($row){
            return view("user.products.productName",compact('row'));   
            })
        ->addColumn('product_price', function ($row){
        return view("user.products.productPrice",compact('row'));   
        })
        ->addColumn('product_status', function ($row){
            return view("user.products.productStatus",compact('row'));   
            })
        ->addColumn('product_received', function ($row){
        return view("user.products.productReceived",compact('row'));   
        })
        ->make(true);
    }

    public function received($id)
    {
        $order = Order::find($id);
        $order->status = PaymentStatus::Received;
        $order->save();
        return redirect()->back();
    }
}
