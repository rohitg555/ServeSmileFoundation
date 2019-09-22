<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;


class clientController extends Controller
{
	// public function NgoaccountStore(){
	// 	return view('ngo_register');
	// }

     public function ngoAccountStore(Request $request)
    {
        // $verification_string = md5(microtime());
        // dd($request->all());
         $client = new client();
         $client->Full_Name = $request->Full_Name;
         $client->email = $request->email;
         // $client->Alternation_Email = $request->Alternation_Email;
         $client->mobile = $request->mobile;
         // $client->Alternation_mobile = $request->Alternation_mobile;
         $client->Address = $request->Address;
         $global_desisters = implode(',', $request->global_desisters);
         $client->global_desisters = $global_desisters;
         $client->password = $request->password;
         // $client->verification_string = $verification_string;
         $client->save();
    }
}
