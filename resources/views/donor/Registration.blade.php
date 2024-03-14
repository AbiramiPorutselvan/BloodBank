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
    <form action="{{url('storedonorrequest')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3 class="one">DONAR REQUEST</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Name</label>
                            <input type="text" class="form-control" name="donor_name" value="{{old('donor_name')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Gender</label>
                            <select class="form-control" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Date of Birth</label>
                            <input type="date" class="form-control" name="donor_dob" value="{{old('donor_dob')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Blood Group</label>
                            <select class="form-control" name="blood_group">
                                <option value="A+ve">A+ve</option>
                                <option value="A-ve">A-ve</option>
                                <option value="B+ve">B+ve</option>
                                <option value="B-ve">B-ve</option>
                                <option value="AB+ve">AB+ve</option>
                                <option value="AB-ve">AB-ve</option>
                                <option value="O+ve">O+ve</option>
                                <option value="O-ve">O-ve</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Mobile No</label>
                            <input type="number" class="form-control" name="mobile_no" value="{{old('mobile_no')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Address</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address">{{old('address')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title" >District</label>
                            <select class="form-control" name="district">
                                <option value="">Select District</option>
                                @foreach($district as $district)
                                <option value="{{$district->id}}">{{$district->district_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Id Proof</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                </div>
                @if (count($errors)>0)
                    <div class="text-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <button class="save">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</form>
</body>
</html>