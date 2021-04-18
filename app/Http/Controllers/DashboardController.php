<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function withdwaw() {
        return view('dashboard.withdraw');
    }

    public function sellcrypto() {
        return view('dashboard.sell-crypto');
    }

    public function buybitcoin() {
        return view('dashboard.buy-bitcoin');
    }
}
