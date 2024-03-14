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
                <h3 class="one">ADMIN LOGIN</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-title">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <button>Submit</button>
                        </div>
                    </div>
                </div>
            </form>

            </div>
            
        </div>
    </div>

</body>
</html>
