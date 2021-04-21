<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{

    public function plan() {
        return view('admin.plan');
    }

    public function buyer() {
        return view('admin.buyer');
    }

    public function seller() {
        return view('admin.seller');
    }

    public function withdraw() {
        return view('admin.withdraw');
    }


    public function registerUser(User $users) {
        $users = User::all();
        return view('admin.dashboard')->with('users', $users);
    }
 public function editUser($id)
    {
       $users = User::findorfail($id);
       return view('admin.edit')->with('users', $users);
    }

    public function updateUser(Request $request, $id) {

        $users = User::findorfail($id);

        // $request->validate([
        //     'name' => ['string', 'max:100'],
        //     'email' => ['string', 'email', 'max:50', 'unique:users'],
        //     'username' => ['string', 'max:9', 'unique:users'],
        //     'country' => ['string', 'max:20', 'min:3'],
        //     'phone' => ['string', 'max:11', 'unique:users'],
        // ]);


        $users->fname = $request->input('fname');
        $users->lname = $request->input('lname');
        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->country = $request->input('country');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/admin')->with('success', 'Database has been updated');
    }

    public function deleteUser($id) {
        $users = User::findorfail($id);
        $users->delete();

        return redirect('/admin')->with('success', 'Users has been deleted!');
    }
    public function editbitcoinAddress($id) {
        $users = User::findorfail($id);
       return view('admin.edit_bitcoin_address')->with('users', $users);
    }

    public function updatebitcoinAddress(Request $request, $id) {
        $users = User::findorfail($id);
        $users->bitcoinAddress = $request->input('bitcoinAddress');
        $users->update();
        return redirect('/admin')->with('success', 'Your Bitcoin Address has been updated');
    }
}
