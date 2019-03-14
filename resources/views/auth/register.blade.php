<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Forms</title>

    <!-- Icons font CSS-->
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <a class="btn btn-danger" href="{{url('index')}}"><h2>Go to Home</h2></a>
                    <h2 class="title">Registration Info</h2>
                    @if (count($errors) > 0)
                        <div style="color:red;" class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="<?php echo url('auth/register') ?>" onsubmit="return validateForm();">
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="input-group">
                            <input id="password" class="input--style-3" type="password" placeholder="Password" name="password" onkeyup="validatePass()">
                            <span style="color: red;"></span>
                        </div>
                        <div class="input-group">
                            <input id="repassword" class="input--style-3" type="password" placeholder="Password confirmation" name="password_confirmation">
                            <span style="color: red;"></span>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option value="1">Male</option>
                                    <option value="0">Female</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input id="phone" class="input--style-3" type="text" placeholder="Phone" name="phone" onkeyup="validatePhone()">
                            <span style="color: red;"></span>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/global.js')}}"></script>
    <script type="text/javascript">
        function validateForm() {
      if (validatePass() & validateRePassword() & validatePhone()) {
        return true;
      }
      else {
        return false;
      }
    }

    function validatePass() {
      var field = $('#password').val();
      var filter = /^.{6,}$/;

      if (!filter.test(field)) {
        $('#password').parent().parent().addClass('has-error');
        $('#password').parent().parent().removeClass('has-success');
        $('#password').next().html('Password have at least 6 characters!');
        return false;
      }
      else {
        $('#password').parent().parent().removeClass('has-error');
        $('#password').parent().parent().addClass('has-success');
        $('#password').next().html('');
        return true;
      }
    }

    function validateRePassword() {
      var psw = $('#password').val();
      var repsw = $('#repassword').val();

      if (repsw != psw) {
        $('#repassword').parent().parent().addClass('has-error');
        $('#repassword').parent().parent().removeClass('has-success');
        $('#repassword').next().html('Password not match');
        return false;
      }
      else {
        $('#repassword').parent().parent().removeClass('has-error');
        $('#repassword').parent().parent().addClass('has-success');
        $('#repassword').next().html('');
        return true;
      }
    }

    function validatePhone() {
      var field = $('#phone').val();
      var filter = /^\d{10,11}$/;

      if (!filter.test(field)) {
        $('#phone').parent().parent().addClass('has-error');
        $('#phone').parent().parent().removeClass('has-success');
        $('#phone').next().html('Phone numbers from 10 to 11 number');
        return false;
      }
      else {
        $('#phone').parent().parent().removeClass('has-error');
        $('#phone').parent().parent().addClass('has-success');
        $('#phone').next().html('');
        return true;
      }
    }
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->