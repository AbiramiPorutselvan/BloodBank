@extends('admin.adminLayout')
@section('content')
    	<div class="content">
            <div class="carddesign">
    		<form action="{{url('district_store')}}" method="post" >
                {{csrf_field()}}
                <h3>Add District</h3>
            <label>District Name:</label>  
            <input type="text" name="district_name"></br>
            <lable>District Code:</lable>
            <input type="text" name="district_code"></br>
            <button type="submit" class="table">Add</button>  
            </form>
        </div>
    	</div>
@endsection