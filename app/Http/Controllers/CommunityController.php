<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\User;
class CommunityController extends Controller
{
    public function list(){
        $Cdata= Community::Where('id', "1")->get();
        $data= User::all();
         return view('community.communityprofile',['Cdata'=>$Cdata],['data'=>$data]);
      }
}
