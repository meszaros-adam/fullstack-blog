<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloguser;
use Illuminate\Support\Facades\Auth;

class BloguserController extends Controller
{
    public function registration(Request $request){

        $this->validate($request,[
            'fullname' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $password = bcrypt($request->password);
       
        Bloguser::create([
            'fullName' => $request->fullname,
            'email' => $request->email,
            'password' => $password,
        ]);

        return redirect('/login_page');
    }
    public function login(Request $request){
        $this->validate($request,[
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:6',
        ]);

        if(Auth::guard('bloguser')->attempt(['email' => $request->email, 'password' => $request->password])){
            $bloguser = Auth::guard('bloguser')->user();
            return $bloguser;
        }else{
            return 'Auth failed';
        }

    }
}
