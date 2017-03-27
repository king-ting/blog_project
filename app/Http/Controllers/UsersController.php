<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Image;
use File;

class UsersController extends Controller

{
    public function update_avatar(Request $request) {

    	//handle the user upload of avatar
    	if ($request->hasFile('avatar')) {
    		$avatar = $request->file('avatar');
    		$filename = time().'.'.$avatar->getClientOriginalExtension();

    		if (Auth::user()->avatar !== 'avatar.png') {
                $file = public_path('/avatar/'.Auth::user()->avatar);

                if (File::exists($file)) {
                    unlink($file);
                }

            }

    		Image::make($avatar)->resize(300,300)->save( public_path('/avatar/'.$filename));

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return back();

    }

    
}
