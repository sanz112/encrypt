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


    public function index() {
        return view('dashboard.index');
    }


    public function withdraw() {
        return view('dashboard.withdraw');
    }

    public function sellcrypto() {
        return view('dashboard.sell-crypto');
    }

    public function buybitcoin() {
        return view('dashboard.buy-bitcoin');
    }

    public function plan() {
        return view('dashboard.plan');
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
            'image' => $request->input('image'),
        ]);
return redirect('/dashboard/sell-crypto')->with('status', 'Once your request has been confirmed. We will forward you your money in less than 48 hours');

}

    public function planCoin(Request $request) {

        $request->validate([
            'amount' => 'required|integer',
            'bank_name' => ['required', 'string', 'max:200'],
            'account_number' => ['required', 'string', 'max:20'],
            'sort_code' => ['required', 'string', 'unique:withdraw'],
        ]);

        $crypt = Plan::create([
            'plan_name' => $request->input('plan_name'),
        ]);
return redirect('/dashboard/plan')->with('status', 'You have Invested'.$request->input('plan_name').'Expect 10% return by the end of the month');
    }

    public function withdrawCoin(Request $request) {
        $request->validate([
            'plan_name' => 'required|integer'
        ]);

        $crypt = Plan::create([
            'plan_name' => $request->input('plan_name'),
        ]);
return redirect('/dashboard/plan')->with('status', 'You have Invested'.$request->input('plan_name').'Expect 10% return by the end of the month');
    }
}
