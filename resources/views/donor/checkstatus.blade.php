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
        <ul>
        <li>BloodBank</li>
        <a href="{{url('/')}}"><li>Home</li></a>
    </ul>
    </nav>
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
                    @foreach($donorlist as $donorlist)
    				<tr>
    					<td>{{$donorlist->donor_name}}</td>
                        <td>{{$donorlist->donor_dob}}</td>
                        <td>{{$donorlist->blood_group}}</td>
                        <td>{{$donorlist->gender}}</td>
                        <td>{{$donorlist->mobile_no}}</td>
                        <td>{{$donorlist->district_id}}</td>
                        <td>{{$donorlist->address}}</td>
                        <td><a href="{{asset('public/img')}}/{{$donorlist['image']}}" class="img-content">View Image</a></td>
    				</tr>
                    @endforeach
    			</tbody>
    		</table>
    		</div>
    </body>