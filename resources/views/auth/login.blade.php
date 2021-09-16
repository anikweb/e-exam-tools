<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | E-Exam Tools</title>
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- bootstrap 4 css  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        @media only screen and (max-width: 700px) {
            .welcome-image{
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-6 mt-sm-1 mt-md-5 d-sm-none d-md-block  text-center">
                <h1 class="text-primary">E-Exam Tools</h1>
                <h2 class="text-info lead"> Here your daily exams tools</h2>
                <div class="welcome-image">
                    <img  width="400px" src="{{ asset('backend/dist/img/online-exams.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 mt-sm-1 mt-md-5 pt-sm-1 pt-md-5">
                <div class="card m-md-5">
                    <div class="card-header bg-primary text-center text-white">
                        <div class="card-title">
                            <h5 class="text-center">Sign In</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                @error('email')
                                    <div class="text-danger">
                                        @if ($message == 'These credentials do not match our records.')
                                            <i class="fa fa-exclamation-circle"></i>
                                            {{ $message }}
                                        @endif
                                    </div>
                                @enderror
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                    <div class="text-danger">
                                       @if ($message != 'These credentials do not match our records.')
                                            <i class="fa fa-exclamation-circle"></i>
                                            {{ $message }}
                                       @endif
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" autocomplete="current-password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <div class="text-danger">
                                        <i class="fa fa-exclamation-circle"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember_token" name="remember">
                                <label for="remember_token">Remember me</label>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-sign-in-alt"></i> Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery 3 js  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- popper js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- botstrap 4 js  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
