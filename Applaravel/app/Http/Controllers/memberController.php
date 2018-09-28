<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Member;
 use App\classSchool;;

class memberController extends Controller
{
    public function getListMember()
    {
        $Member = Member::all();
        return view('admin/member/list_member',['Member'=>$Member]);
    }
     public function getEditMember($id)
    {
        $classSchool= classSchool::all();
         $Member =Member::where('id',$id)->first();
        return view('admin.member.edit_member',['Member'=>$Member],['classSchool'=>$classSchool]);
    }
    public function postEditMember(Request $request,$id)
    {
        $Member =Member::where('id',$id)->first();
        $this->validate($request,
            [
                'name'=>'request|min:3|max:50'
            ],
            [
                'name.required'=>'Bạn chưa nhập Tên',
                'name.min'=>'Tên quá ngắn',
                'name.max'=>'Tên quá dài'
            ]);
        $Member->name =$request->name;
        $Member->birthday =$request->gender;
        $Member->height =$request->email;
        $Member->weight =$request->msisdn;
        $Member->class_id =$request->password;
        $Member->description =$request->description;
        $Member->save();
        return redirect('admin/member/edit_member'.$id)->with('thongbao','sửa Thành công') ;
    }
}
