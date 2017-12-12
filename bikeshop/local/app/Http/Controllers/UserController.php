<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\RegisterRequest;
use Auth;
use Hash;
class UserController extends Controller
{
    public function getRegister()
    {
        return view('user.register');
    }
    public function postRegister(RegisterRequest $request)
    {
        $user = new User(); 
        $user->full_name = $request->txtFullname;
        $user->email = $request->txtUsername;
        $user->password = Hash::make($request->txtPassword);
        $user->phone = $request->txtPhone_number;
        $user->address = $request->txtAddress;
        $user->save();
        return redirect()->back()->with('success','Đăng kí tài khoản thành công');
    }
    public function getLogin()
    {
        return view('user.login');
    }
    public function postLogin(Request $login_request)
    {
        $this->validate($login_request,
        [
          'txtEmail'=>'required|email',
          'txtPassword'=>'required'  
        ],
        [
          'txtEmail.required'=>'Vui lòng nhập email',
          'txtPassword.required'=>'Vui lòng nhập password'
        ]
        );
        if(Auth::attempt(['email'=>$login_request->txtEmail,'password'=>$login_request->txtPassword]))
        {
            return redirect()->route('homepage')->with('success','Đăng nhập thành công');
        }
        else {
            return redirect()->route('login')->with('fail','Sai tài khoản hoặc mật khẩu');
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('homepage');
    }
}
