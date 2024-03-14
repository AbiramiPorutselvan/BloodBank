@extends('admin.adminLayout')
@section('content')
    	<div class="content">
    		<div class="carddesign">
    		<table class="table">
    			<tr>
    				<th>Name</th>
    				<th>Blood Group</th>
    				<th>District</th>
    				<th>Mobile No</th>
    				<th>Address</th>
                    

    			</tr>
    			<tbody>
                    @foreach($requestlist as $blood)
    				<tr>
    					<td>{{$blood->name}}</td>
                        <td>{{$blood->bloodGroup}}</td>
                        <td>{{$blood->district_id}}</td>
                        <td>{{$blood->mobile}}</td>
                        <td>{{$blood->address}}</td>
    				</tr>
                    @endforeach
    			</tbody>
    		</table>
    		</div>
    	</div>
@endsection