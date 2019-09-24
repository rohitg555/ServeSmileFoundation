<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use App\NgoInformationTable;


class clientController extends Controller
{
	public function index(){
		return view('ngo');
	}

     public function ngoAccountStore(Request $request)
    {
        // $verification_string = md5(microtime());
        // dd($request->all());
         $client = new client();
         $client->ngo_name = $request->ngo_name;
         $client->full_name = $request->ngo_name;
         $client->email = $request->email;
         $client->alternate_email = $request->alternate_email;
         $client->mobile = $request->mobile;
         $client->alternate_mobile = $request->alternate_mobile;
         $client->address = $request->address;
         $disaster = implode(',', $request->disaster);
         $client->disaster = $disaster;
         $client->password = $request->password;
         // $client->verification_string = $verification_string;
         $client->save();
         $ngo_id = $client->id;
         // dd($ngo_id);
         $ngo_info = new NgoInformationTable();
         $ngo_info->ngo_id = $client->id;
         $ngo_info->save();
         $url = '/ngo_dashboard/'.$ngo_id;
         return redirect($url);
    }
    public function ngoDashboard(Request $request, $ngo_id){
        // dd($ngo_id);
        $data = NgoInformationTable::where('ngo_id' , $ngo_id)->first();
        // dd($data->agreement);
        // dd($data->email_verification);
        if ($data->agreement == null) {
            return view('privacy_policy');
        }
        else {
            // "update agreement to curent date"
        }
        $data->agreement;


    }
    public function privacyPolicy(Request $request){
        dd($request->all());
    }
    public function privacy(){
        return view('ngo');
    }
}
