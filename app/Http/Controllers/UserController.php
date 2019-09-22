<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use DB;
use App\Contribution;

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

         // dd($verification_string);

        $email = $request->email;
        $message_data = ["email"=>$email];
        Mail::send('mail_registration', [ 'message_data' => $message_data, 'verification_string'=> $verification_string], function ($message) use($message_data)
         {
            $message->from('akashb.m786@gmail.com');
            $message->to($message_data['email'])->subject('Verification of Serve Smile Foundation');
        });
            
        $user->save();


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
   

    public function passwordForgot(){
        return view("forgot_password");
    }

    public function sendVerificationEmail(Request $request) {
        // dd($request->all());
        $email = $request->email;

        $verification_string = md5(microtime());

        $data = User::where('email', $email)->first();

        if ($data) {

            DB::table('users')
            ->where('email',$email)
            ->update(['forgot_pswd_verification_string'=>$verification_string]);

            $message_data = ["email"=>$email];
            Mail::send('forgot_password_email_verification', [ 'message_data' => $message_data, 'verification_string'=> $verification_string], function ($message) use($message_data)
             {
                $message->from('akashb.m786@gmail.com');
                $message->to($message_data['email'])->subject('Forgot password email verification');
            });  
            $success = "Email sent for verification. Please check your inbox.";
            return view('forgot_password', compact('success'));
        }
        else {
            // dd("aat alela gela");
            $message = "This use does not exist.";
            return view('forgot_password', compact('message'));

        }
    }
        public function passwordReset($verification_string){

            // dd("bhetl");
        $data = User::where('forgot_pswd_verification_string', $verification_string)->first();
        // dd($data);
           if ($data) {
            $email = $data->email;
            return view("reset_password", compact('email'));

               # code...
           }
           else{
            dd("ny bhetl");

           }
    }
           public function passwordUpdate(Request $request){

            $password = $request->new_password;
            $email= $request->email;

            DB::table('users')
            ->where('email',$email)
            ->update(['password'=>$password]);

            $response["status"]="success";

            return view("reset_password", compact('response', 'email'));

           }
           public function donationForm(Request $request){
            return view("ngo_form");
           }
           public function ngoDonation(Request $request){
            $data = new Contribution();
            $data->ngo_name = $request->ngo_name;
            $data->aadhaar_card_no = $request->aadhaar_card_no;
            $data->email = $request->email;
            $data->mobile_number = $request->mobile_number;
            $data->amount = $request->amount;
            $data->save();
            // dd("jhal");
           }



}
