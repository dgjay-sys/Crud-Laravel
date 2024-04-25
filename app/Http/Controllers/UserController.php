<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use  App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    //

    public function createUser(Request $request)
    {
        $fName = $request->input('fName');
        $lName = $request->input('lName');
        $name = $fName . " " . $lName;
        $username = $request->input('username');
        $hashpassword = $request->input('password');

        User::create([
            'fname' => $name,
            'username' => $username,
            'password' => $hashpassword
        ]);

        return redirect()->route('login');
    }

    public function readUsers()
    {
        $users = User::select('user_id', 'fname', 'username')->get();
        return view('showuser', ['name' => $users]);
    }



    public function updateUser(Request $request, $id)
    {
        $name = $request->input('fname');
        $username = $request->input('username');
        User::where('user_id', $id)->update($request->all());
        return redirect()->route('show');
    }

    public function deleteUser($id)
    {
        User::where('user_id', $id)->delete();

        return Redirect::back()->with('message', 'Operation Successful !');
    }
}
