@extends('layouts.master')
@section('title', 'User Profile')
@section('menu-top')    
@parent
@endsection  
@section('content')
<section class="banner_area">
  <div class="container">
      <div class="banner_content">
          <h4>Bill Details</h4>
      </div>
  </div>
</section>
<div class="container"> 
            <h2><b>Bill Details </b> <a href="{{url('user-profile')}}" class="btn btn-danger">< <i class="fa fa-user"></i></a> </h2>
  <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr>
    <th style="width:10%">Bill Id</th>
    <th style="width:10%">Food Image</th>  
    <th style="width:30%">Food Name</th> 
    <th style="width:10%">Quantity</th> 
    <th style="width:10%">Price</th> 
    <th style="width:10%">SubTotal</th> 
   </tr> 
  </thead> 
  <tbody>
    @foreach ($billDetail as $item)
  <tr> 
   <td> 
      {{$item->bill_id}}
   </td> 
   <td>
     <a href="{{ url('food-details', $item->id)}}"><img class="img-cart" style="width: 100px; height: 80px;" src="{{ url('') }}/img/foods/{{@$item->food->food_img}}" alt="{{$item->name}}"> </a>
   </td>
   
   
   <td> <h4><a style="color: #000;" href="{{ url('food-details', $item->food->id)}}">{{$item->food->food_name}} <i class="fa fa-search"></i></a></h4>  </td> 
   <td>
    {{$item->qty}}
   </td> 
   <td>$ {{$item->price}}</td>

    <td>$ {{$item->subtotal}}</td>
  </tr> 

 
  @endforeach
  </tbody>

 </table>
</div>