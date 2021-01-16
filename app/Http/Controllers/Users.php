<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Users extends Controller
{
    public function list(){
      $data= User::all();
       return view('profile.userprofile',['data'=>$data]);
    }
     
}
