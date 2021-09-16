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
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-5 mx-auto my-auto">
                <div class="card ">
                    <div class="card-header bg-success text-center text-white">
                        <div class="card-title">
                            <img width="150px" src="{{ asset('backend/dist/img/rimt.png') }}" alt="rimt logo">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center">Sign In</h5>
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
                                <button class="btn btn-success" type="submit"><i class="fa fa-sign-in-alt"></i> Sign In</button>
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
