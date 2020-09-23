<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TYI | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('admin_theme/bower_component/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_theme/bower_component/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_theme/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> @yield('css')
    {{-- custom css --}}
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin_theme/custom.css')}}?{{uniqid()}}">
    <style>
        .form-control.error {
            border-color: #dc3545;
        }
    </style>

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>TYI</b> ADMIN</a>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success ">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger">
	            <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="login-box-body">
            <p class="login-box-msg">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
            <form action="{{ route('admin.password.update') }}" method="post" id="reset_password_form">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group has-feedback">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' error' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus placeholder="Enter your Email">

                    {{-- <input type="email" class="form-control" placeholder="Email" name="email" required > --}}
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter your Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Please  Confirm Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Send</button>
                    </div>
                </div>
            </form>
            <div style="text-align: center;">
            <br>
            <a style="text-align:center;" href="{{url('admin/login')}}">back to Sign In</a>
            </div>
        </div>
    </div>
    <script src="{{asset('admin_theme/bower_component/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin_theme/bower_component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $('form[id="reset_password_form"]').validate({
            rules: {
                email: { required: true,email: true,},
                password: { required: true, minlength: 8, maxlength: 15},
                password_confirmation: { required: true, equalTo : "#password"},
            },
            errorClass: "error-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.form-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.form-group').removeClass('error');
                $(element).parents('.form-group').addClass('success');
            }
        });
        $("#email").keyup(function(){
            $("#email").removeClass('error');
        });
    </script>
</body>
</html>


