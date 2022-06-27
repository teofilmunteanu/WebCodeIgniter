<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {  
        if(session()->get('email') != null){
            return redirect()->route('main');
        }
        else{
            return view('login');
        }
    }
    
    public function signup()
    {
        if(session()->get('email') != null){
            return redirect()->route('main');
        }
        else{
            return view('signup');
        }
        
    }
    
     public function loginCheck()
    {
        helper(['form','url']);
        
        $data = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'cAnswer' => $this->request->getVar('captchaAnswer'),
            'cValue' => $this->request->getVar('captchaValue'),
        ];
        
        
        if (! $this->validate([
            'email' => 'required',
            'password' => 'required|min_length[3]',
        ])) {
            return view('login');
        }
        
        if(strtoupper($data['cAnswer'])!=$data['cValue']){
            $msgData['msg'] = "Invalid Captcha";  
            return view('login', $msgData);
        }

        $model = new UserModel();
        
        $email = $data['email'];
        $pass = md5($data['password']);
        $sql = $model->where("email='$email' AND password='$pass'");
        if (!empty($sql->findAll())){
            $this->session = \Config\Services::session();
            $this->session->start();
            session()->set('email', $email);
            
            return redirect()->route('main');
        }
        else{
            $msgData['msg'] = "Wrong credentials!";  
            return view('login', $msgData);
        }    
    }
    
    public function signupCheck()
    {
        $cAns = $this->request->getVar('captchaAnswer');
        $cVal = $this->request->getVar('captchaValue');
        $data = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'userType' => 'normal',
        ];
        $data['password'] = md5($data['password']);
        
        if (!$this->validate([
            'email' => 'required|is_unique[users.email]',
            'password' => 'required|min_length[3]',
        ])) {
            return view('signup');
        }
        
        $cpass = md5($this->request->getVar('cpassword'));
        if($data['password'] != $cpass){
            $msgData['msg'] = "Passwords must match";  
            return view('signup', $msgData);
        }
        
        if(strtoupper($cAns)!=$cVal){
            $msgData['msg'] = "Invalid Captcha";  
            return view('signup', $msgData);
        }
        
        $model = new UserModel();
        $save = $model->insert($data);
        
        return redirect()->route('/');
        
    }
}
