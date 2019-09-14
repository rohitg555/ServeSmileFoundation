<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;

class UserController extends Controller
{
    public function accountCreate() {
    	return view('create_account');
    }

    public function accountStore(Request $request) {
    	// dd($request->all());
         $verification_string = md5(microtime());
    	 $user = new User();
    	 $user->name = $request->name;
    	 $user->email = $request->email;
    	 $user->mobile = $request->mobile;
    	 $user->password = $request->password;
         $user->verification_string = $verification_string;
    	 $user->save();

         // dd($verification_string);

        $email = $request->email;
        $message_data = ["email"=>$email];
        Mail::send('mail_registration', [ 'message_data' => $message_data, 'verification_string'=> $verification_string], function ($message) use($message_data)
         {
            $message->from('akashb.m786@gmail.com');
            $message->to($message_data['email'])->subject('Verification of Serve Smile Foundation');
        });         



         return redirect('/dashboard');
    }
    public function dashboardShow() {
        return view('dashboard');
    }
    public function emailVerify($verification_string) {
        // dd($verification_string);
        $flag = User::where('verification_string', $verification_string)->first();
        // dd($flag);
        if ($flag) {
            return view('dashboard');
        }
        else {
            // dd("Not verified");
            return view('verify_mail_error');

        }
        return view('verify_email');
    }

}
