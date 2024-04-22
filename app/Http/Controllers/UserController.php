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
        $name = $request->input('user_name');
        $username = $request->input('username');
        $hashpassword = Hash::make('password');
        User::create([
            'user_name' => $name,
            'username' => $username,
            'password' => $hashpassword
        ]);
        return redirect()->route('show');    }

    public function readUsers(): View
    {
        $users = User::select('user_id', 'user_name', 'username')->get();
        return view('showuser', ['name' => $users]);
    }



    public function updateUser(Request $request, $id)
    {
        $name = $request -> input('user_name');
        $username = $request -> input('username');
        $password = $request -> input('password'); 
        
        User::where('user_id' , $id)->update($request->all());
    }

    public function deleteUser($id)
    {
        User::where('user_id', $id)->delete();

        return Redirect::back()->with('message', 'Operation Successful !');
    }

    public function checkDB()
    {
        $db = DB::connection();
        $db->query('SHOW DATABASES');
        dd($db);
    }
}
