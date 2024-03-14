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
                    <th>Action</th>

    			</tr>
    			<tbody>
                    @foreach($blood as $blood)
    				<tr>
    					<td>{{$blood->name}}</td>
                        <td>{{$blood->bloodGroup}}</td>
                        <td>{{$blood->district_id}}</td>
                        <td>{{$blood->mobile}}</td>
                        <td>{{$blood->address}}</td>
          				<td><a href="{{url('edit_request')}}/{{$blood->id}}"><i class="fa fa-pencil"></i></a></td>
    				</tr>
                    @endforeach
    			</tbody>
    		</table>
    		</div>
    	</div>
@endsection