<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
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
        $users = User::find($id);

        $users->name = $request->input('name');
        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->country = $request->input('country');

    //     $data = request()->validate((
    //         'name' => '',
    //         'username' => '',
    //         'phone' => '',
    //         // 'image' => ''
    //  ]);

        $users->update();

        return redirect('/admin')->with('success', 'Database has been updated');
    }

    public function deleteUser($id) {
        $users = User::findorfail($id);
        $users->delete();

        return redirect('/admin')->with('success', 'Users has been deleted!');
    }
}
