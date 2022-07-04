<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

//use Illuminate\Support\Facades\Auth;

class featureController extends Controller
{
    public function index(){
    	$search = \Request::get('NIS');

    	$Users = Users::where('NIS', 'like', '%'.$search.'%');
    	// return view('features')->with('Users', $users);
        return view('features' , ['Users'=>$Users]);
    }

	   //  public function show(){
	   //  	$primary = $NIS;
	   //  	$users = features::find('NIS');
    // 		 $id = \Request::get('NIS');
    		

    // 		$users = Features::find($search);
    // 		$users = Features::where('NIS', $search);
    // 	$users = nilai::where('NIS', 'like', '%'.$id.'%');
    // 	return view('features')->with('users',$users);
    // }
}
