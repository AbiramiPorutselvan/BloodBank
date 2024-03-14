<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\district;
use App\Models\donor;

class DonorController extends Controller
{
    public function registration()
    {
    	$get_district=district::where('is_deleted',0)->where('status',0)->get();
    	return view('donor.Registration')->with(['district'=>$get_district]);
    }

    public function edit_donor($id)
    {
        $get_district=district::where('is_deleted',0)->where('status',0)->get();
        $get_donor=donor::where('is_deleted',0)->where('status',0)->where('id',$id)->first();
        return view('admin.edit_donor')->with(['donor'=>$get_donor,'district'=>$get_district]);
    }

    public function accept_donor($id)
    {
        $get_donordetail=donor::where('id',$id)->first();
        $get_donordetail->status=1;
        $get_donordetail->update();
        return redirect('donorRequest');   
    }

     public function donorRequest()
    {
        $get_donor=donor::where('is_deleted',0)->where('status',0)->get();
    	return view('admin.donorRequest')->with(['donor'=>$get_donor]);
    }
    public function storedonorrequest(Request $request)
    {
    	$validated =$request->validate([
    		'donor_name'=>'required',
    		'donor_dob'=>'required|date|before:-18 years',
    		'mobile_no'=>'required|min:10|max:10',
    		'image'=>'required|mimes:jpeg,jpg,png'
    	]);

        if($request->image){
            $id_proof = substr(md5(mt_rand()),0,7).$request->file('image')->getClientOriginalName();
            $request->image->move(public_path('img'),$id_proof);
        }
    	$donor_store = new donor();
    	$donor_store->donor_name = $request->donor_name;
    	$donor_store->donor_dob = $request->donor_dob;
    	$donor_store->blood_group=$request->blood_group;
    	$donor_store->gender = $request->gender;
    	$donor_store->mobile_no = $request->mobile_no;
    	$donor_store->district_id = $request->district;
    	$donor_store->address = $request->address;
        $donor_store->image = $id_proof;
    	$donor_store->save();
    	return redirect('registration');
    }
    public function storedonoredit(Request $request)
    {
        if($request->image){
            $id_proof = substr(md5(mt_rand()),0,7).$request->file('image')->getClientOriginalName();
            $request->image->move(public_path('img'),$id_proof);
        }

        $donor_edit = donor::where('id',$request->id)->first();

        $donor_edit->donor_name = $request->donor_name;
        $donor_edit->donor_dob = $request->donor_dob;
        $donor_edit->blood_group=$request->blood_group;
        $donor_edit->gender = $request->gender;
        $donor_edit->mobile_no = $request->mobile_no;
        $donor_edit->district_id = $request->district;
        $donor_edit->address = $request->address;
        if($request->file('id_proof')){
            $donor_edit->image=$id_proof;
        }
        $donor_edit->update();
        return redirect('donorRequest');
    }
}
