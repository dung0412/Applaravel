<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class loginController extends Controller
{
    //
    public function getLoginAdmin()
    {
    	return view('admin/login/login');
    }
    public function postLoginAdmin(Request $request)
    {

    	// $this->validate($request,[
    	// 	'email'=>'required',
    	// 	'password'=>'required|min:3|max:32'
    	// ],[
    	// 	'email.required'=>'Bạn chưa nhập email',
    	// 	'password.required'=>'Bạn chưa nhập mật khẩu',
    	// 	'password.min'=>'password không được nhở hơn 3',
    	// 	'password.max'=>'password không được nhở hơn 32'
    	// ]);


        $login=[
            'email'=>session('emai;'),
            'password'=>session('password')
        ];
         //$credentials = $request->only('email'=>$request->email, 'password'=>$request->password);

        echo (Auth::attempt($login));
    	// if(Auth::attempt($login))
    	// {
    	// 	//return redirect('admin/layout/content');
    	// }
    	// else{
    	// 	return redirect('admin/login/login')->with('thongbao','Đăng nhập không thành công');
    	// }
    }


}
