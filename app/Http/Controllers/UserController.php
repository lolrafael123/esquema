<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function profile(){
        return view('partials.alunoform', array('user'=> Auth::user()) );
        
    }

	public function aluno(){
        return view('partials.aluno', array('user'=> Auth::user()) );
        
    }

    public function update_avatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar->getRealPath())->resize(450, 450)->save( public_path('images/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return view('partials.alunoform', array('user'=> Auth::user()) );

    }
}
