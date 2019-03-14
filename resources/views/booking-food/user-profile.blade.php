@extends('layouts.master')
@section('title', 'User Profile')
@section('menu-top')    
@parent
@endsection  
@section('content')
<section class="banner_area">
  <div class="container">
      <div class="banner_content">
          <h4>User Profile</h4>
      </div>
  </div>
</section>
<div class="container"> 
              <!-- BEGIN FORM -->
              <?php //var_dump($cart); ?>
          <h2>User Profile :@if (Auth::check()) {{ Auth::user()->name }}</h2>
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
            <form action="{{url('user-profile')}}" method="post" class="form-horizontal" enctype="multipart/form-data" onsubmit="return validateForm();">
               <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

              
               <div class="form-group">
                <label class="control-label col-sm-2" >Email:</label>
                <div>
                  <label style="text-align: left;" class="control-label col-md-10">{{ Auth::user()->email }}</label>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="food_name">Password:</label>
                <div class="col-sm-9">
                  <input type="password" value="{{ Auth::user()->password }}" required="required" class="form-control" id="password" placeholder="Enter pass" name="password" onkeyup="validatePass()">
                  <span style="color: red;"></span>
                </div>
                <div class="col-sm-1">
                  <i onclick="myFunction()" class="fa fa-edit btn btn-success"></i>
                </div>
              </div>

              <div class="form-group" id="confirmpass" style="display: none;">
                <label class="control-label col-sm-2" for="food_name">Comfirm Password:</label>
                <div class="col-sm-9">
                  <input type="password" required="required" class="form-control" id="repassword" placeholder="Enter confirm pass" name="password_confirmation">
                  <span style="color: red;"></span>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="food_name">Name:</label>
                <div class="col-sm-9">
                  <input type="text" value="{{ Auth::user()->name }}" required="required" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-2" for="food_name">Phone:</label>
                <div class="col-sm-9">
                  <input type="text" value="{{ Auth::user()->phone }}" required="required" class="form-control" id="phone" placeholder="Enter phone" name="phone" onkeyup="validatePhone()">
                  <span style="color: red;"></span>
                </div>
              </div>
              <input class="btn btn-success" type="submit" value="Update infor">
            </form>
              @else
                <button class="btn btn-danger"><a href="{{url('auth/login')}}">Login</a></button>

              @endif
            

           

            <!-- END FORM -->
            <h2 id="orders"><b>My Orders</b> </h2>
  @if ($bills->count() > 0)
  <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr>
    <th style="width:10%">Bill Id</th> 
    <th style="width:30%">Date order</th> 
    <th style="width:40%">Addres</th> 
    <th style="width:10%">Total</th> 
    <th style="width:10%">Details</th> 
   </tr> 
  </thead> 
  <tbody>

    @foreach ($bills as $item)
  <tr> 
   <td> 
      {{$item->id}}
   </td> 
   <td>{{$item->date_order}} </td> 
   <td>
    {{$item->address}}
   </td> 
   <td >$ {{$item->total}}</td> 
      
   <td> <a href="{{ url('bill-details', $item->id)}}"><i class="fa fa-eye"></i></a> </td> 
  </tr> 

  @endforeach
  </tbody>
 </table>
 @else
   <h3>You have not ordered <a class="btn btn-danger" href="{{url('menu-grid')}}">Order now</a></h3>
  @endif
  <br>

  <h2 id="orders"><b>My Booking</b> </h2>
  @if ($book->count() > 0)
  <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr>
    <th style="width:10%">ID</th> 
    <th style="width:30%">Date Book</th> 
    <th style="width:40%">Time</th> 
    <th style="width:10%">Party Size</th> 
    <th style="width:5%">Comfirm</th> 
    <th style="width:5%">Action</th> 
   </tr> 
  </thead> 
  <tbody>
    @foreach ($book as $item)
  <tr> 
   <td> {{$item->id}}</td> 
   <td>{{$item->date_book}} </td> 
   <td>{{$item->time_book}}</td> 
   <td ><i class="fa fa-user"></i> {{$item->party_size}}</td> 
      
   @if ($item->confirm == 0)
    <td class="check"><a class="templatemo-link"><i class="fa fa-times-circle"></i></a></td>
  @else 
  <td class="check"><a class="templatemo-link"><i class="fa fa-check-square"></i></a></td>
  @endif
  <td><a onclick="return confirm('Are you sure?');" href="user-profile/{{$item->id}}/cancel-booking" class="templatemo-link btn btn-danger">Cancel</a></td>
  </tr> 
  @endforeach
  </tbody>
 </table>
 @else
   <h3>You have not book the table <a class="btn btn-danger" href="{{url('table')}}">Book now</a></h3> 
  @endif
  <br>
 <style type="text/css">
    .check {font-size: 2em;text-align: center;}.fa-times-circle {color: red;}.fa-check-square {color: green;}
  </style> 
  <script type="text/javascript">
    function myFunction() {
    document.getElementById("confirmpass").style.display = "block";
}
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
</div>