<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{
    public function AccountAdd(){
        return view('admin.page.account');
    }
    public function AccountStore(Request $request){
        
        // $validator = Validator::make($request, [
        //     'name' => 'required',
        //     'email' => 'nullable|email|unique:users,email,NULL,id,deleted_at,NULL',
        //     'password' => 'required',
        // ]);

        // if($validator->fails()){
        //     return response()->json([
        //         'error' => true,
        //         'message' => $validator->errors()
        //     ]);
        // }else{
        $user = new User();
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->password = $request->password;
        $user->user_type = $request->user_type;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('dashboard');

        // }
        
    }
}
