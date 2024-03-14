@extends('admin.adminLayout')
@section('content')
    	<div class="content">
            <div class="carddesign">
    		<h3>DISTRICTS LIST</h3>
    		<a href="{{url('/createDistrict')}}"><button class="create">Create</button></a>
    		<table class="table">
    			<tr>
    				<th>District Name</th>
    				<th>Code</th>
    				<th>Status</th>
                    <th>Action</th>

    			</tr>
    			<tbody>
                    @foreach($district as $district)
    				<tr>
    					<td>{{$district->district_name}}</td>
                        <td>{{$district->district_code}}</td>
                        <td>{{$district->status}}</td>
                        <td>{{$district->action}}</td>
    				</tr>
                    @endforeach
    			</tbody>
    		</table>
        </div>
    	</div>
@endsection