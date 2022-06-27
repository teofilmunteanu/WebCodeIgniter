<?php

namespace App\Controllers;
use App\Models\ImageModel;

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
            $model = new ImageModel();
            $data['images'] = $model -> findAll();
            return view('main', $data);
        }
        else{
            return redirect()->route('/');
        }
    }
    
    public function logout()
    {
        session()->remove('email');
        return redirect()->route('/');
    }
}
