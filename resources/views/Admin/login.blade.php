<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('admin_theme/bower_component/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_theme/bower_component/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_theme/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> @yield('css')
    {{-- custom css --}}
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin_theme/custom.css')}}?{{uniqid()}}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>WELCOME</b> ADMIN</a>
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
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{route('admin.login')}}" method="post" id="login_form">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
            <div style="text-align: center;">
            <br>
            <a style="text-align:center;" href="{{url('admin/forgotpassword')}}">I forgot my password</a>
            </div>
        </div>
    </div>
    <script src="{{asset('admin_theme/bower_component/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin_theme/bower_component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $('form[id="login_form"]').validate({
            rules: {
                email: { required: true,email: true,},
                password: { required: true, minlength: 8,}
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
    </script>
</body>
</html>


