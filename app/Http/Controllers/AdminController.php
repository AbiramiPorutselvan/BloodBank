<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donor;
use App\Models\blood;


class AdminController extends Controller
{
    
   
    public function completedRequest()
    {
    	$requestList=blood::where('status',1)->get();
    	return view('admin.completedRequest')->with(['requestlist'=>$requestList]);
    }
    public function donorList()
    {
    	$donorList=donor::where('is_deleted',0)->where('status',1)->get();
    	return view('admin.donorList')->with(['donorlist'=>$donorList]);
    }
    
}
