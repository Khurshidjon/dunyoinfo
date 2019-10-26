<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BackendController extends Controller
{
    public function index()
    {
        if(Auth::check() AND Auth::user()->hasRole('Admin'))
        {
            return view('backend.index');
        }else{            
            return redirect()->route('admin.login');
        }
    }

    public function loginPage()
    {
        if(!Auth::check()){
            return view('backend.adminAuth.login');
        }else{
            return redirect('/');
        }
    }
    
    public function form()
    {
        return view('backend.form');
    }
    public function tables()
    {
        return view('backend.tables');
    }
    
}
