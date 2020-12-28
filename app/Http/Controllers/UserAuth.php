<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $req)
    {
      $data = $req->input();
      $req->session()->put('username', $data['username']);
      return redirect('profile');
    }

    // Login
    public function userIsLogin()
    {
      if(session()->has('username'))
      {
        return redirect('profile');
      }
      else
      {
        return view('pages/login');
      }
      
    }

    // Profile
    public function profile()
    {
      if (session()->has('username')) 
      {
        return view('pages/profile');
      }
      else
      {
        return redirect('login');
      } 
    }
    
    // Logout
    public function userIsLogout()
    {
      if (session()->has('username')) 
      {
        session()->pull('username');
      }
      return redirect('login');
    }

    
}