<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Whitefox Admin</title><meta charset="UTF-8" />
         <link rel="icon" type="image/gif" href="{{asset('Site/images/logo-page.png')}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('css/Admin/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/Admin/bootstrap-responsive.min.css') }}" />
        <link rel="icon" href="{{ asset('image/download.png') }}" type="image/x-icon"/>
        <link rel="stylesheet" href="{{ asset('css/Admin/matrix-login.css') }}" />
        <!-- <link href="{{ asset('fonts/Admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" /> -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">      
        @include('flashmessages')   
             
        <form method="POST" action="{{ route('admin.password.update') }}">
        <div class="control-group normal_text"> <img src="{{ asset('image/Admin/logo1.png') }}" alt="Logo" 
  /></div>
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

        <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus placeholder="Enter your Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-lock"></i></span><input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter your Password">
                        
                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                    </div>
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-lock"></i> </span><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Please  Confirm Password">
                    </div>
                   
                           
                    <div class="form-actions">
                   
                    <span class="pull-right"><input type="submit" value="Reset" class="btn btn-success" /></span>
                </div>
                            
                        
        </div>

         </form>
        </div>
        
        <script src="{{ asset('js/Admin/jquery.min.js') }}"></script>  
        <script src="{{ asset('js/Admin/matrix.login.js') }}"></script> 
        <script src="{{ asset('js/Admin/bootstrap.min.js') }}"></script> 

    </body>

</html>
