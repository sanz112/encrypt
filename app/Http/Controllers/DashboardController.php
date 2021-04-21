<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuyBitcoin;
use App\Plan;
use App\SellCrypto;
use App\Withdraw;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(User $users) {
        $users =User::find(auth()->user()->id);
        return view('dashboard.index')->with('users', $users);
    }


    public function withdraw(User $users) {
        return view('dashboard.withdraw')->with('users', $users);;
    }

    public function sellcrypto(User $users) {
        return view('dashboard.sell-crypto')->with('users', $users);;
    }

    public function buybitcoin(User $users) {
        return view('dashboard.buy-bitcoin')->with('users', $users);
    }

    public function plan(User $users) {
        return view('dashboard.plan')->with('users', $users);;
    }



    public function buyBit(Request $request) {


        $request->validate([
            'amount' => 'required|integer',
            'wallet_name' => ['required', 'string', 'max:200'],
            'hash_key' => ['required', 'string', 'max:255'],
        ]);

        $crypt = BuyBitcoin::create([
            'amount' => $request->input('amount'),
            'wallet_name' => $request->input('wallet_name'),
            'hash_key' => $request->input('hash_key'),
            'user_id' => $request->input('user_id'),
        ]);
return redirect('/dashboard/buy-bitcoin')->with('status', 'We will validate your request and send you a mail when it is completed');
    }

    public function sellCrypt(Request $request) {

        $request->validate([
            'amount' => 'required|integer',
            'bank_name' => ['required', 'string', 'max:200'],
            'account_number' => ['required', 'string', 'max:20'],
            'sort_code' => ['required', 'string', 'unique:sell_cryptos'],
            'image' =>['required', 'mimes:jpg|png|jpeg'],
        ]);
    $crypt = SellCrypto::create([
            'amount' => $request->input('amount'),
            'bank_name' => $request->input('bank_name'),
            'account_number' => $request->input('account_number'),
            'sort_code' => $request->input('sort_code'),
            'user_id' => $request->input('user_id'),
            'image' => $request->input('image'),
        ]);
return redirect('/dashboard/sell-crypto')->with('status', 'Once your request has been confirmed. We will forward you your money in less than 48 hours');

}

    public function planCoin(Request $request) {

        $request->validate([
            'plan_name' => 'required',
            'sort_code'=> 'required'
        ]);

        $crypt = Plan::create([
            'plan_name' => $request->input('plan_name'),
            'sort_code' => $request->input('sort_code'),
            'user_id' => $request->input('user_id'),
        ]);
return redirect('/dashboard/plan')->with('status', 'You have Invested into'.$request->input('plan_name').'Expect 10% return by the end of the month');
    }

    public function withdrawCoin(Request $request) {
        $request->validate([
            'amount' => 'required|integer',
            'bank_name' => ['required', 'string', 'max:200'],
            'account_number' => ['required', 'string', 'max:20'],
            'sort_code' => ['required', 'string', 'unique:withdraws'],
        ]);


        $user = auth()->user();
        $id = $user->id;

        $users = $user->wallet;

        if($users >= $request->input('amount') ){
            $idd = User::find($id);
            $wal = $users - $request->input('amount');
            $idd->wallet = $wal;
            $up = $idd->update();
            //   $user->wallet->update($request->input('amount'));
            if($up) {
        $crypt = Withdraw::create([
            'amount' =>  $request->input('amount'),
            'bank_name' => $request->input('bank_name'),
            'account_number' =>  $request->input('account_number'),
            'sort_code' =>  $request->input('sort_code'),
            'user_id' => $request->input('user_id'),
        ]);

return redirect('/dashboard/withdraw')->with('status', 'You have withdrawn USD'. $request->input('amount') .' from your account');
        }
        }

        return redirect('/dashboard/withdraw')->with('status', 'Insufficient Amount');
    }
}
