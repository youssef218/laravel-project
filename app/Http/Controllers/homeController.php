<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
        $first = Profile::paginate(20);
        // dump( );
        return view("welcomee", compact('first'));
    }

    public function show($id){
        //  $id = (int) $request->id;
         $profile = Profile::findOrFail($id);
        return view("show", compact('profile'));
    }
}
