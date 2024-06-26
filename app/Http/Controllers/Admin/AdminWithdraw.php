<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApproveWithdraw;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminWithdraw extends Controller
{
    public function withdrawal()
    {
        $withdrawal = Withdraw::all();
        return view('admin.transactions.withdrawal', compact('withdrawal'));
    }

    public function approve_withdrawal($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $withdraw->status = 1;
        $user = User::findOrFail($withdraw->user_id);
        if ($withdraw->source == "Main-Bal"){
            $user->balance -= $withdraw->amount;
            $user->save();
            $withdraw->save();
            Mail::to($user->email)->send(new ApproveWithdraw($withdraw));
            return redirect()->route('admin.withdrawal')->with('success', "Withdrawal Approved Successfully");
        }
        $user->profit -= $withdraw->amount;
        $user->save();
        $withdraw->save();
        Mail::to($user->email)->send(new ApproveWithdraw($withdraw));
        return redirect()->route('admin.withdrawal')->with('success', "Withdrawal Approved Successfully");

    }

    public function delete_withdrawal($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $withdraw->delete();
        return redirect()->back();
    }

    public function withdrawPercent(Request $request, $id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $withdraw->percent = $request->percent;
        $withdraw->save();
        return redirect()->back()->with('updated', "Withdrawal Updated Successfully");
    }

    public function withdrawDetails($id)
    {
        $with = Withdraw::findOrFail($id);
        return view('admin.transactions.withdrawal-details', compact('with'));
    }

    public function updateDate(Request $request)
    {
        $id = $request->with_id;
        $withdraw = Withdraw::findOrFail($id);
        $withdraw->updated_at = $request->updated_at;
        $withdraw->save();
        return redirect()->back()->with('success', 'Date Updated Successfully');
    }


}
