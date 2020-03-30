<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $formData = $request->all();
        if($request->isMethod('post')){
            if(Auth::attempt(['email'=>$formData['email'], 'password'=>$formData['password'], 'admin'=>1])){
                echo 'OK';
                return redirect('admin/dashboard');
            }
            else {
                echo 'NOT OK';
                return redirect('/admin/login')->with('flash_message_error', 'Tài khoản không hợp lệ...');
            }
        }

        return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
