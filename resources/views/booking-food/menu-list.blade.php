@extends('layouts.master')
@section('title', 'Menu List')
@section('menu-top')    
@parent
@endsection  
@section('content')
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>Menu List</h4>
                    <a href="#">Home</a>
                    <a class="active" href="menu-list.html">Menu</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================End Our feature Area =================-->
        <section class="most_popular_item_area menu_list_page">
            <div class="container">
                <div class="popular_filter">
                    <ul>
                         <li class="active" data-filter="*"><a href="">All</a></li>
                        @foreach ($cates as $key)
                        <li data-filter=".{{$key->cate_name}}"><a href="">{{ $key->cate_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="p_recype_item_main">
                    <div class="row p_recype_item_active">
                          @foreach ($data['foods'] as $key)
                        <div class="col-md-6 {{$key->category->cate_name}}">
                            <div class="media">
                                <div class="media-left">
                                    <img style="width: 112px; height: 125px;" src="img/foods/{{ $key->food_img }}" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="{{ url('food-details', $key->id)}}"><h3>{{ $key->food_name }}</h3></a>
                                    <h4>$ {{ $key->food_price }}</h4>
                                    <p>{{ substr($key->food_desc, 0, 50) }}</p>
                                    
                                    <form method="post" action="<?php echo url('cart') ?>">
                                            <input type="hidden" name="id" value="<?php echo $key->id?>">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button class="read_mor_btn" type="submit" style="background: none; border: none;">
                                              Add To Cart
                                            </button>
                                        </form>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our feature Area =================-->
        