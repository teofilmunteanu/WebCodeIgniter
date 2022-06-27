<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if(session()->get('email') != null){
            return redirect()->route('main');
        }
        else{
            return view('index');
        } 
    }
    
    public function main()
    {
        if(session()->get('email') != null){
            return view('main');
        }
        else{
            return redirect()->route('/');
        }
    }
}
