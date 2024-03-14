<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="{{asset('public/css/styles.css')}}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>BloodBank</title>
    </head>
    <body>	
    		<nav>
    			<h4>BLOOD BANK</h4>
    		</nav>
    	<div class="sidebar">
    		<a href="{{url('/home')}}">DashBoard</a>
    		<a href="{{url('/districts')}}">Districts</a>
    		<a href="{{url('/donorRequest')}}">DonorRequest</a>
            <a href="{{url('/donorList')}}">DonorList</a>
    		<a href="{{url('/bloodRequest')}}">BloodRequest</a>
    		<a href="{{url('/completedRequest')}}">CompletedRequest</a>
    		<a href="{{url('/signOut')}}">SignOut</a>
    	</div>
        @yield('content')
    </body>
    </html> 