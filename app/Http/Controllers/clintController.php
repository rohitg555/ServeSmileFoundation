<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clint;


class clintController extends Controller
{
	// public function NgoaccountStore(){
	// 	return view('Ngo_register');
	// }

     public function NgoaccountStore(Request $request)
    {
        // $verification_string = md5(microtime());
        // dd($request->all());
         $clint = new clint();
         $clint->Full_Name = $request->Full_Name;
         $clint->email = $request->email;
         // $clint->Alternation_Email = $request->Alternation_Email;
         $clint->mobile = $request->mobile;
         // $clint->Alternation_mobile = $request->Alternation_mobile;
         $clint->Address = $request->Address;
         $global_desisters = implode(',', $request->global_desisters);
         $clint->global_desisters = $global_desisters;
         $clint->password = $request->password;
         // $clint->verification_string = $verification_string;
         $clint->save();
    }
}
