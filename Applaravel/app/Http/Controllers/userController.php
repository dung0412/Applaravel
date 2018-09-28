<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

use App\User;
class userController extends Controller
{
    public function getListUser(){
    	 $User =User::all();
    	return view('admin.user.list_user',['User'=>$User]);
    }

    public function getEditUser($id)
    {
         $User =User::where('id',$id)->first();
    	return view('admin.user.edit_user',['User'=>$User]);
    }
    public function postEditUser(Request $request,$id)
    {
        $User =User::where('id',$id)->first();
        // $this->validate($request,
        //     [
        //         'email'=>'request|unique:User,email|min:3|max:50'
        //     ],
        //     [
        //         'email.required'=>'Bạn chưa nhập email',
        //         'email.unique'=>'Email đã tồn tại',
        //         'email.min'=>'Email quá ngắn',
        //         'email.max'=>'Email quá dài'
        //     ]);
        $User->name =$request->name;
        $User->gender =$request->gender;
        $User->email =$request->email;
        $User->msisdn =$request->msisdn;
        $User->password =$request->password;
        $User->address =$request->address;
        $User->facebook =$request->facebook;
        $User->description =$request->description;
        $User->type =$request->type;
        $User->salt=Crypt::encrypt($request->password);
        $User->save();
        return redirect('admin/user/edit_user'.$id)
        // ->with('thongbao','sửa Thành công') 
        ;
    }
    public function getAddUser()
    {
        return view('admin.user.add_user');
    }
    public function postAddUser(Request $request)
    {
        $this->validate($request,
            ['email'=>'required|min:3|max:50',
            'email.request'=>'Email da ton tai',
            'email.min'=>'Email qua ngan',
            'email.max'=>'Email qua dai']);
        $this->validate($request,
            ['msisdn'=>'required|min:3|max:50',
            'msisdn.request'=>'Số điện thoại da ton tai',
            'msisdn.min'=>'Số điện thoại qua ngan',
            'msisdn.max'=>'Số điện thoại qua dai']);
        $User =new User;
        $User->name =$request->name;
        $User->gender =$request->gender;
        $User->email =$request->email;
        $User->msisdn =$request->msisdn;
        $User->password =$request->password;
        $User->address =$request->address;
        $User->facebook =$request->facebook;
        $User->description =$request->description;
        $User->type =$request->type;
        $User->salt=Crypt::encrypt($request->password);
        $User->save();

        return redirect('admin/user/add_user')->with('thongbao','Them thanh cong');
        // echo $request->name;
        // echo $request->type;

        
    }

    public function getLoginAdmin()
    {
        return view('admin/login/login');
    }
    public function postLoginAdmin(Request $request)
    {
 
        // $this->validate($request,[
        //  'email'=>'required',
        //  'password'=>'required|min:3|max:32'
        // ],[
        //  'email.required'=>'Bạn chưa nhập email',
        //  'password.required'=>'Bạn chưa nhập mật khẩu',
        //  'password.min'=>'password không được nhở hơn 3',
        //  'password.max'=>'password không được nhở hơn 32'
        // ]);
        $login=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($login))
        {
           return redirect()->intended('dashboard');
        }
        else{
            return redirect('admin/login/login')->with('thongbao','Đăng nhập không thành công');
        }
    }


}
