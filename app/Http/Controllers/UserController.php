<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    // public function index(Request $request)
    // {
    //     return view('back/login');
    // }
    public function Register(Request $request)
    {
        $addUser = DB::table('users')->insert(
            [   'first_name' =>$request->first_name,
                'last_name' =>$request->last_name,
                'phone' =>$request->phone,
                'email' =>$request->email,
                'password' =>$request->password,
                'company_name' =>$request->company_name,
                'type' =>"ownerAds",
                'created_at' =>date("Y-m-d H:i:s"),
                
            ]
         );
         if($addUser){
            $user = DB::table('users')->latest()->first();;    
            Session::put('user', $user->id);
            Session::put('userName', $user->last_name." ".$user->first_name);
            return redirect('/')->with('message', 'success register welcome ');
         }else{
            return redirect('/')->with('message', 'error register repeat again');
         }

    }

    public function login(Request $request)
    {
    
        $user = DB::table('users')->where([
            ['email', '=', $request->email],
            ['password', '=', $request->password],

        ])->First();
        if(!$user){
            return redirect('/')->with('loginFailed', 'invalid email or password repeat again');

        } else if ($user->type == "admin") {
            $idUser = $user->id;
            Session::put('admin', $idUser);
            Session::put('userName', $user->first_name." ".$user->last_name);
            return redirect('/')->with('message', 'Welcome '. $user->first_name." ".$user->last_name.'');
        
        } else if ($user->type == "ownerAds") {
            $idAdmin = $user->id;
            Session::put('user', $idAdmin);
            Session::put('userName', $user->first_name." ".$user->last_name);
            return redirect('/')->with('message', 'Welcome '. $user->first_name." ".$user->last_name.'');

        } 

    }
}
