<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $req)
    {
      $data = $req->input();
      $req->session()->put('username', $data['username']);
      return redirect('dashboard');
    }

    // Login
    public function userIsLogin()
    {
      if(session()->has('username'))
      {
        return redirect('dashboard');
        
      }
      else
      {
        return view('pages/login');
      }
      
    }

    
    public function board()
    {
      if(session()->has('username')) 
      {
        return view('pages/board');
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