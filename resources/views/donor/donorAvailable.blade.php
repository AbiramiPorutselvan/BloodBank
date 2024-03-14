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
        <div class="blood">
        <form action="{{url('checkstatus')}}" method="post">
            {{csrf_field()}}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Enter your Ṭrack Id</label>
                            <input type="text" class="form-control" name="track_id">
                        </div>
                    </div>
                </div>
            </div>
            <button type="Submit" class="save">Submit</button>
            @if(session()->has('error'))
            <div class="alert alert-danger font-weight-bold text-dark">
                {{session()->get('error')}}
            </div>
            @endif
        </form>
        </div>
    </div>