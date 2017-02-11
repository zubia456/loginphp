<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\user;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    public function index(){
        return view('home');
    }
    
    public function register(){
        return view('register');
    }
    
    public function insert(Request $request){
        $user =new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->city = $request->city;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->save();
        
        return view('register');
        
    }
    
    public function login(){
         return view('login');
        
    }
    public function check(Request $request){
        $email_login = $request->email;
        $password_login = $request->password;
        
        $user =DB::table('users')->first();
        $email_db = $user->email;
        $password_db= $user->password;
        
        if($email_login == $email_db) {
            if($password_login == $password_db){
            session_start();
            $_SESSION['email'] = $email_login;
            $_SESSION['name'] = $user->name;
                echo "<script>window.location.href='http://localhost/Test_laravel/public/home'</script>";
            
            } 
            else{
             
             return $password_login;
            }
        
        }
        else{
             
             return $email_db;
            }
    
    }
}