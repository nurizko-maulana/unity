<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Image; 

class Users extends Controller
{
    public function list(){
      $data= User::all();
       return view('profile.userprofile',['data'=>$data]);
    }
    public function updateAvatar(Request $request){
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('../../unity/public/uploads/avatars/'.$filename));

        $user = Auth::user();
        $user->avatar=$filename;
        $user->save();
      }
      return view('profile.userprofile',array('user' => Auth::user() ));
    }
}
