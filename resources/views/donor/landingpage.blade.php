<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBank</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/styles.css')}}">    
</head>
<body>
	<nav class="navbar_container">
        <h4>BloodBank</h4>
    </nav>
	<h3>Blood Bank</h3>
	<div class="button-container">
<a href="{{url('/adminLogin')}}"><button>Login as Admin</button></a></br>
<a href="{{url('/registration')}}"><button>Register as a Donar</button></a></br>
<a href="{{url('/request')}}"><button>Rise Request</button></a></br>
<a href="{{url('/donoravailable')}}"><button>Track your Request</button></a></br>

</div>
</body>
