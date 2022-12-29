<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminContorller extends Controller
{
    public function AdminDashbordView(){
        return view('superadmin.page.admin_dashboard');
    }

    public function AllAcountView(){
        $data = User::get();
        return view('superadmin.page.user_view',compact('data'));
    }
    public function RegFormView(){
        return view('superadmin.page.account_add');
    }

    public function UserRegistation(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->password =bcrypt($request->password);
        $user->user_type = $request->user_type;
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('all.account.view');
    }

    public function UserActive($id){
        $data = User::find($id);
        $data->status = 1;
        $data->save();
        return redirect()->back();
    }
    public function UserDelete($id){
        User::find($id)->delete();
        return redirect()->back();
    }

}
