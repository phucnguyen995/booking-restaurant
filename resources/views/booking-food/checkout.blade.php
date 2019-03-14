@extends('layouts.master')
@section('title', 'Check out')
@section('menu-top')    
@parent
@endsection  
@section('content')
<section class="banner_area">
  <div class="container">
      <div class="banner_content">
          <h4>Check out</h4>
      </div>
  </div>
</section>
<div class="container"> 
              <!-- BEGIN FORM -->
              <?php //var_dump($cart); ?>
          @if (Auth::check())
          <h2>Information</h2>
          <button class="btn btn-danger"><a style="color: #fff;" href="{{url('cart')}}"> < View cart</a></button>
            <form action="{{URL::action('FoodController@postCheckout')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
              <div class="form-group">
                <label class="control-label col-sm-2" for="food_name">Email:</label>
                <div class="col-sm-9">
                  <input disabled="disabled" type="text" value="{{ Auth::user()->email }}" required="required" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="food_name">Name:</label>
                <div class="col-sm-9">
                  <input disabled="disabled" type="text" value="{{ Auth::user()->name }}" required="required" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                 <div class="col-sm-1"><a class="btn btn-success" href=""><i class="fa fa-edit"></i></a></div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-2" for="food_name">Phone:</label>
                <div class="col-sm-9">
                  <input disabled="disabled" type="text" value="{{ Auth::user()->phone }}" required="required" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                </div>
                 <div class="col-sm-1"><a class="btn btn-success" href=""><i class="fa fa-edit"></i></a></div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" >Address:</label>
                <div class="col-sm-9">
                  <input type="text" required="required" class="form-control" id="name" placeholder="Enter address" name="address">
                </div>
              </div>

             

              <div class="form-group">
                <label class="control-label col-sm-2" for="food_cate">Choose a pay type :</label>
                <div class="col-sm-9">
                  <select required="required" name="food_cate" id="food_cate" class="form-control">
                    <option value="ship">SHIP (HCM: Free, Other : $1)</option>
                    <option disabled="disabled">CART CREDIT (Not available)</option>
                  </select> 
                </div>
              </div>


              <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="checkout" class="btn btn-success">Check out</button>
                </div>
              </div>
            </form>
            <!-- END FORM -->
            @else
              <h2>You need to login before making a payment</h2>
              <a href="{{url('auth/login')}}" class="btn btn-danger">Login</a>
            @endif
            <style type="text/css">
              form {
                padding-top: 30px;
              }
            </style>
</div>