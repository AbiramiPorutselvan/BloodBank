<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\district;
use App\Models\blood;
use App\Models\donor;

class BloodController extends Controller
{
  public function request()
    {
        $get_district=district::where('is_deleted',0)->where('status',0)->get();
        return view('donor.request')->with(['district'=>$get_district]);
    }

     public function bloodRequest()
    {
        $get_request=blood::where('status',0)->get();
        return view('admin.bloodRequest')->with(['blood'=>$get_request]);
    }

    public function edit_request($id)
    {
        $get_blooddetail=blood::where('id',$id)->first();
        $get_blooddetail->status=1;
        $get_blooddetail->update();
        return redirect('bloodRequest');

    }

    public function storerequest(Request $request)
    {
    	$validated = $request->validate([
    		'name'=>'required',
    		'bloodGroup'=>'required',
    		'mobile'=>'required|min:10|max:10',
    		'address'=>'required']);

    	$track_id = rand(10,100000).date('ymisd');
    
    	$bloodrequest_store = new blood();
    	$bloodrequest_store->name = $request->name;
    	$bloodrequest_store->bloodGroup = $request->bloodGroup;
    	$bloodrequest_store->district_id = $request->district;
    	$bloodrequest_store->mobile = $request->mobile;
    	$bloodrequest_store->address = $request->address;
    	$bloodrequest_store->track_id = $track_id;
    	$bloodrequest_store->save();

        $donor_count = Donor::where('district_id',$request->district)->where('blood_group',$request->bloodGroup)->where('status',1)->count();

    	
    	return redirect('request')->with('success', $donor_count.' donor was found, you can receive more details once admin has approved. You can track your request by following track id:'.$track_id);
    	
    }

    public function donoravailable()
    {
    	return view('donor.donoravailable');
    }

    public function checkstatus(Request $request)
    {
        $checkstatus = blood::where('track_id',$request->track_id)->first();
        if(!$checkstatus)
            return redirect('donoravailable')->with('error','Invalid Track Id');
        elseif($checkstatus->status==0)
            return redirect('donoravailable')->with('error','Your request is still pending...Please wait');
        else
        {
            $listdonor=donor::where('district_id',$checkstatus->district_id)->where('blood_group',$checkstatus->bloodGroup)->where('is_deleted',0)->get();
            return view('donor.checkstatus')->with(['donorlist'=>$listdonor]);
        }
    }
}
