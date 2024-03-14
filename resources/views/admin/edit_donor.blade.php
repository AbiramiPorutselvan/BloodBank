@extends('admin.adminLayout')
@section('content')
<div class="content">
<form action="{{url('storedonoredit')}}" method="post" enctype="multipart/form-data" class="editdonor">
        {{csrf_field()}}
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3 class="one">EDIT DONAR REQUEST</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title" id="label" >Name</label></br>
                            <input type="hidden" name="id" value="{{$donor->id}}">
                            <input type="text" class="form-control" name="donor_name" value="{{$donor->donor_name}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title" id="label">Gender</label></br>
                            <select class="form-control" name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title" id="label">Date of Birth</label></br>
                            <input type="date" class="form-control" name="donor_dob" value="{{$donor->donor_dob}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title" id="label">Blood Group</label></br>
                            <select class="form-control" name="blood_group" id="blood_group">
                                <option value="A+ve">Select BloodGroup</option>
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
                            <label class="form-title" id="label">Mobile No</label></br>
                            <input type="number" class="form-control" name="mobile_no" value="{{$donor->mobile_no}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title" id="label">Address</label></br>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address">{{$donor->address}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title" id="label">District</label></br>
                            <select class="form-control" name="district" id="district">
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
                            <label class="form-title" id="label">Id Proof</label></br>
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
</div>
<script type="text/javascript">
    $(document).ready(function () {
        const bg = {{ Js::from($donor['blood_group']) }};
        $("#blood_group").val(bg);
        const gen = {{ Js::from($donor['gender']) }};
        $("#gender").val(gen);
        const dis = {{ Js::from($donor['district_id']) }};
        $("#district").val(dis);

    });
</script>
@endsection