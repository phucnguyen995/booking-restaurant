@extends('layouts.master')
@section('title', 'Menu Grid')
@section('menu-top')    
@parent
@endsection  
@section('content')
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>Menu Grid</h4>
                    <a href="#">Home</a>
                    <a class="active" href="menu-list.html">Menu</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================End Our feature Area =================-->
        <section class="most_popular_item_area menu_list_page" id="food_filter">
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
                    <div class="row"> 
                         <div class="col-md-4 col-sm-6">
                            <aside class="right_widget search_widget">
                                    <form action="{{url('search')}}#search_rs" method="get">  
                                        <div class="input-group">
                                        <input type="text"
                                        name="keySearch" class="form-control" placeholder="Search food..." >
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                        </span>
                                        </div>
                                    </form>
                            </aside>
                        </div>
                        <div class="col-md-6 col-sm-6 filter-button">
                            <form action="{{url('menu-grid')}}#food_filter" method="get">
                                <select name="filter" style="padding: 20px 35px;">
                                    <option value="price_asc">Price Ascending</option>
                                    <option value="price_desc">Price Descending</option>
                                </select>
                                <button type="submit" style="border: 1px solid #fff; background: #000 ;padding: 18px 25px; color: #fff; font-weight: bold;">FILTER</button>
                            </form>
                        </div>
                       
                    </div>
                    <div class="row p_recype_item_active">
                        @foreach ($data['foods'] as $key)
                        <div class="col-md-4 col-sm-6 {{$key->category->cate_name}}">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img style="width:100%;height:220px;" src="img/foods/{{$key->food_img}}" alt="">
                                    <div class="icon_hover">
                                        <a href="{{ url('food-details', $key->id)}}"><i class="fa fa-search"></i></a>
                                        <form method="post" action="<?php echo url('cart') ?>">
                                            <input type="hidden" name="id" value="<?php echo $key->id?>">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" style="background: none; border: none;">
                                               <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="{{ url('food-details', $key->id)}}"><span>{{$key->food_name}}</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">$ {{$key->food_price}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our feature Area =================-->
        
    