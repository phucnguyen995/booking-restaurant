@extends('layouts.master')
@section('title', 'Cart')
@section('menu-top')    
@parent
@endsection  
@section('content')
<section class="banner_area">
  <div class="container">
      <div class="banner_content">
          <h4>Cart</h4>
          <a href="<?php echo url('index')?>">Home</a>
          
      </div>
  </div>
</section>
<div class="container"> 
    @if(count($cart))
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr>
    <th style="width:10%">No</th> 
    <th style="width:40%">Food Image</th> 
    <th style="width:40%">Food Name</th> 
    <th style="width:10%">Price</th> 
    <th style="width:10%">Quantity</th> 
    <th style="width:20%" class="text-center">Subtotal</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody>
    <?php  $i = 1;  

    ?>
  @foreach($cart as $item)
  <tr> 
    <td><?php echo $i++;?></td>
    <td> 
      <a href="{{ url('food-details', $item->id)}}"><img class="img-cart" style="width: 100px; height: 80px;" src="{{ url('') }}/img/foods/{{@$item->options['image']}}" alt="{{$item->name}}"> </a>
    </td> 
    <td> 
      <h4><a style="color: #000;" href="{{ url('food-details', $item->id)}}">{{$item->name}}</a></h4> 
    </td> 
   <td>{{number_format($item->price,2)}}</td> 
   <td>
    <div class="cart_quantity_button">
      <a class="cart_quantity" href='{{url("cart?id=$item->id&decrease=1")}}'> - </a>
      <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="1">
       <a class="cart_quantity" href='{{url("cart?id=$item->id&increment=1")}}'> + </a>
    </div>
   </td> 
   <td data-th="Subtotal" class="text-center">$ {{number_format($item->subtotal,2)}}</td> 
   <td class="actions" data-th="">
      <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href='{{url("cart?id=$item->id&remove=1")}}'><i class="fa fa-trash"></i> </a>

   </td> 
  </tr> 
  </tbody>
  @endforeach
  <tfoot> 
   <tr> 
    <td><a href="{{url('menu-grid')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue shopping</a>
    </td> 
    <td colspan="1" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Total: $ <?php echo number_format(Cart::total(),2); ?></strong>
    </td>
    <td colspan="1" class="hidden-xs"> </td> 
    <td> <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href='{{url("cart?destroy=all")}}'> Remove Cart </a>
    </td> 
    <td>
      @if(Auth::check())
      <a href="{{url('checkout')}}" class="btn btn-success btn-block">Pay <i class="fa fa-angle-right"></i></a>
      @else
          <a href="{{asset('auth/login')}}" class="btn btn-success btn-block" onclick="return alert('You need to login before making a payment')">Pay <i class="fa fa-angle-right"></i></a>
      @endif
    </td> 
   </tr> 
  </tfoot> 
 </table>
 
   @else
      <h1>You have no items in the shopping cart</h1>
      <a href="<?php echo url('menu-grid') ?>" class="btn btn-success"> <i style="font-size: 1.2em;" class="fa fa-cart-arrow-down"></i> Shopping</a>
  @endif
</div>

<style type="text/css">
  .cart_quantity {
  font-size: 1.2em;
  text-align: center;
  color: red;
}
</style>