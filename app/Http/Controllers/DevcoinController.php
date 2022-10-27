<?php

namespace App\Http\Controllers;

use App\Models\Devcoin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class DevcoinController extends Controller
{
    public function list()
    {
        return DataTables::of(User::where('ref_by',Auth::user()->ref_own)->whereNotNull('ref_by'))
        ->addIndexColumn()
        ->addColumn('Get_Coin', function ($row){
            return view("user.get_coin",compact('row'));   
            })
        ->make(true);
    }

    public function Coin($id)
    {
        foreach (Devcoin::where('user_id',Auth::id())->get() as  $dev) {
            $dev->coin = $dev->coin + 3000;
            $dev->save();

              $user = User::find($id);
              $user->ref_by = null;
              $user->save();
            return view('user.my_devcoin');
        }

        $Dev_coin = new Devcoin();
        $Dev_coin->user_id = Auth::id();
        $Dev_coin->coin = 3000;
        $Dev_coin->save();

        $user = User::find($id);
        $user->ref_by = null;
        $user->save();

        return view('user.my_devcoin');


    }

    public function EarnCoin()
    {
        return view('user.earn_devcoin');
    }
}

