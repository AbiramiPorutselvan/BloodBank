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
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3 class="one">BLOOD REQUEST</h3>
            </div>
            <form action="{{url('storerequest')}}" method="post">
                {{csrf_field()}}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('donor_name')}}">
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">BloodGroup</label>
                            <select class="form-control" name="bloodGroup">
                                <option value="A+ve">A+ve</option>
                                <option value="A-ve">A-ve</option>
                                <option value="B+ve">B+ve</option>
                                <option value="B-ve">B-ve</option>
                                <option value="AB+ve">O+ve</option>
                                <option value="AB-ve">O-ve</option>
                                <option value="O+ve">AB+ve</option>
                                <option value="O-ve">AB-ve</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">District</label>
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
                            <label class="form-title">Mobile No</label>
                            <input type="number" class="form-control" name="mobile">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Address</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <button class="save">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            
            @if(session()->has('success'))
            <div class="alert alert-success font-weight-bold text-dark">
                {{session()->get('success')}}
            </div>
            @endif
        </div>
    </div>
    </form>
</body>
</html>