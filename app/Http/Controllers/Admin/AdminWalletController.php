<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;

class AdminWalletController extends Controller
{
    public function fundWallet()
    {
        $users = User::where('admin', 0)->get();
        $balance = Wallet::all();
        return view('admin.user.fund-wallet', compact('users', 'balance'));
    }

    public function topUpWallet(Request $request)
    {
        $wallet = new Wallet();
        $wallet->user_id = $request->user_id;
        $wallet->name = $request->name;
        $wallet->value = $request->value;
        $wallet->save();
        return redirect()->back()->with('message', 'Wallet Top Up successfully');
    }


}
