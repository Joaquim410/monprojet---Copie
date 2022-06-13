<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function getregister()

    {

        return view('register');
    }

    public function getlogin()

    {

        return view('login');
    }


    public function add(Request $request)
    {
        $validate = $request->validate([

            'nom' => 'required',
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required',


        ]);

        $user = new User();

        $user->name = $validate['nom'];
        $user->email = $validate['email'];
        $user->password  = Hash::make($validate['password']);

        $user->save();


        return redirect()->route('livres');
    }

    public function authenticate(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $users = User::where('email', '=', $validate['email'])->first();

        if (isset($users)  && Hash::check($validate['password'], $users->password)) {
            session(['users' => $users]);
            return redirect()->route('livres');
           
            
        } else {

            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
{
    Session::flush();
    Auth::logout();
 
    $request->session()->invalidate();
 
     
    return redirect('livres')->with('success','vous êtes déco');

 }
}
