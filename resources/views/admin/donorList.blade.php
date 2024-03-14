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
    				<th>Address</th>
                    <th>Image</th>
                

    			</tr>
    			<tbody>
                    @foreach($donorlist as $district)
    				<tr>
    					<td>{{$district->donor_name}}</td>
                        <td>{{$district->donor_dob}}</td>
                        <td>{{$district->blood_group}}</td>
                        <td>{{$district->gender}}</td>
                        <td>{{$district->mobile_no}}</td>
                        <td>{{$district->district_id}}</td>
                        <td>{{$district->address}}</td>
                        <td><a href="{{asset('public/img')}}/{{$district['image']}}" class="img-content">View Image</a></td>
    				</tr>
                    @endforeach
    			</tbody>
    		</table>
    		</div>
    	</div>
@endsection