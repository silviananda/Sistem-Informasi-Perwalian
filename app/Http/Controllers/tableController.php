<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nilai;

use Illuminate\Support\Facades\Auth;

class tableController extends Controller
{
    public function myTable($NIS, $id_pelajaran){

    	$NIS = $NIS;
    	$user = nilai::find($NIS);

        $id_pelajaran = $id_pelajaran;
        $nilai = nilai::where('NIS', 'like', '%'.$NIS.'%')
    	 ->where('id', 'like', '%'.$id_pelajaran.'%');
    	
    	 return view('table')->with('nilai', $nilai);



    	// $user = user::where('NIS', 'like', '%'.$search.'%');
    	//return view('features')->with('User', $user);

    }
}
