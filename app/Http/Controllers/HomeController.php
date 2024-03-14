<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donor;
use App\Models\blood;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
       $pendingRequest=blood::where('status',0)->count();
        $pendingDonor=donor::where('status',0)->where('is_deleted',0)->count();
        $noofDonor=donor::where('status',1)->where('is_deleted',0)->count();
        $noofRequest=blood::where('status',1)->count();
        
        $thismonthDonor=donor::whereMonth('created_at',date('m'))->whereYear('created_at',date('Y'))->count();
        $thismonthRequest=blood::whereMonth('created_at',date('m'))->whereYear('created_at',date('Y'))->count();
        return view('admin.dashBoard')->with(['PendingRequest'=>$pendingRequest,'PendingDonor'=>$pendingDonor,'TotalNoofDonors'=>$noofDonor,'TotalNoofRequest'=>$noofRequest,'NoofDonorsthismonth'=>$thismonthDonor,'NoofRequeststhismonth'=>$thismonthRequest]);
    }
    public function signOut()
    {
        Auth::logout();
        return view ('auth.login');
    }
   
    public function adminLogin()
    {
        return view('auth.login');
    }
    
    public function landingpage()
    {
        return view('donor.landingpage');
    }
}
