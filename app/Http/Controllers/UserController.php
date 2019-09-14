<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function accountCreate() {
    	return view('create_account');
    }

    public function accountStore(Request $request) {
    	dd($request->all());
    	 $user = new User();
    	 $user->name = $request->name;
    	 $user->email = $request->email;
    	 $user->mobile = $request->mobile;
    	 $user->password = $request->password;
    	 $user->save();
    }
}
