@extends('admin.adminLayout')
@section('content')
    	<div class="content">
    		<div class="carddesign">
    			
    		<h3>DashBoard</h3>
    		<ol>
    			<li><a href="{{url('/bloodRequest')}}">No of Pending Requests:{{$PendingRequest}}</a></li></br>
    			<li><a href="{{url('/donorRequest')}}">No of pending Donors:{{$PendingDonor}}</a></li></br>
    			<li><a href="{{url('/donorList')}}">Total No of Donors:{{$TotalNoofDonors}}</a></li></br>
    			<li><a href="{{url('/completedRequest')}}">Total No of Requests:{{$TotalNoofRequest}}</a></li></br>
    			<li>No of Donors this month:{{$NoofDonorsthismonth}}</li></br>
    			<li>No of Requests this month:{{$NoofRequeststhismonth}}</li>
    		</0l>
    	</div>
    	</div>
@endsection



    		
