@extends('admin.adminLayout')
@section('content')
    	<div class="content">
    		<div class="carddesign">
    		<table class="table">
    			<tr>
    				<th>Donor Name</th>
    				<th>Date of Birth</th>
    				<th>Blood Group</th>
    				<th>Gender</th>
    				<th>Mobile No</th>
    				<th>District</th>
    				<th>Image</th>
                    <th>Edit</th>
                    <th>Approve</th>

    			</tr>
    			<tbody>
                    @foreach($donor as $donor)
    				<tr>
    					<td>{{$donor->donor_name}}</td>
                        <td>{{$donor->donor_dob}}</td>
                        <td>{{$donor->blood_group}}</td>
                        <td>{{$donor->gender}}</td>
                        <td>{{$donor->mobile_no}}</td>
                        <td>{{$donor->district_id}}</td>
                        <td><a href="{{asset('public/img')}}/{{$donor['image']}}" class="img-content">View Image</a></td>
                        <td><a href="{{url('edit_donor')}}/{{$donor->id}}"><i class="fa fa-pencil"></td>
                        <td><a href="{{url('accept_donor')}}/{{$donor->id}}"><i class="fa fa-check"></td>
    				</tr>
                    @endforeach
    			</tbody>
    		</table>
    		</div>
    	</div>
@endsection