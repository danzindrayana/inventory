<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use App\Models\User;

class UserController extends Controller
{
    //
    public function data_user (Request $request){
    	$data = User::all();
    	return view('user',['lihat'=>$data]);
    }
}
