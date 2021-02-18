<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('Auth/login');
    }

    public function login(Request $request){

        if(Auth::user()!=null){
            return redirect()->route('admin_index');
        }

        $user = User::where('login', $request->get('login'))->first();
        if($user==null){
            session()->flash('error', "Invalid credentials");
            return redirect()->route('login_index');
        }
        if(!password_verify($request->get('password'),$user->password)){
            session()->flash('error', "Invalid credentials");
            return redirect()->route('login_index');
        }
        Auth::login($user);
        session()->flash('success', "Bienvenu a votre dashbord.");
        return redirect()->route('admin_index');
    }

    public function logout(Request $request){
       
        if(Auth::user()!=null){
            Auth::logout();
        }
        return redirect()->route('login_login');
    }

}
