@extends('layouts.master')
@section('title', 'Home')
@section('menu-top')    
@parent
@endsection  
@section('content')
        <!--================Slider Area =================-->
        <section class="slider_area">
            <div class=slider_inner>
                <div class="rev_slider fullwidthabanner"  data-version="5.3.0.2" id="home-slider">
                    <ul> 
                        <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="img/home-slider/slider-1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="slider_text_box">
                               <div class="tp-caption bg_box" 
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-x="center" 
                                    data-y="['350','350','300','250','0']"
                                    data-fontsize="['55']" 
                                    data-lineheight="['60']" 
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;" 
                                    data-mask_out="x:inherit;y:inherit;" 
                                    data-start="2000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on">
                                </div>
                                <div class="tp-caption first_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['-20']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['42','42','42','42','25']"
                                    data-lineheight="['52','52','52','52','35']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >Welcome To Our
                                </div>
                                <div class="tp-caption secand_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['45']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['36']"
                                    data-lineheight="['42']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >Red Cayenne
                                </div>
                                <div class="tp-caption third_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['100']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['24','24','24','24','16']"
                                    data-lineheight="['34','34','34','34','26']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1200" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >A PREMIUM RESTAURANT THEME
                                </div>
                                <div class="tp-caption btn_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['180']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['16.75']"
                                    data-lineheight="['26']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1200" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" ><a class="submit_btn_bg" href="{{url('menu-grid')}}">Look Menu</a>
                                </div>
                            </div>
                        </li>
                        <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="img/home-slider/slider-2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="slider_text_box text_box2">
                               <div class="tp-caption bg_box" 
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-x="center" 
                                    data-y="['350','350','300','250']"
                                    data-fontsize="['55']" 
                                    data-lineheight="['60']" 
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;" 
                                    data-mask_out="x:inherit;y:inherit;" 
                                    data-start="2000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on">
                                </div>
                                <div class="tp-caption first_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['-20']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['42','42','42','42','25']"
                                    data-lineheight="['52','52','52','52','35']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >Welcome To Our
                                </div>
                                <div class="tp-caption secand_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['45']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['36']"
                                    data-lineheight="['42']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >Red Cayenne
                                </div>
                                <div class="tp-caption third_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['100']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['24','24','24','24','16']"
                                    data-lineheight="['34','34','34','34','26']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1200" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" >A PREMIUM RESTAURANT THEME
                                </div>
                                <div class="tp-caption btn_text" 
                                    data-x="center" 
                                    data-y="center" 
                                    data-voffset="['180']"
                                    data-Hoffset="['0']"
                                    data-fontsize="['16.75']"
                                    data-lineheight="['26']"
                                    data-width="none"
                                    data-height="none"
                                    data-transform_idle="o:1;"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1200" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" ><a class="submit_btn_bg" href="{{url('menu-grid')}}">Look Menu</a>
                                </div>
                            </div>
                        </li>
                    </ul> 
                </div><!-- END REVOLUTION SLIDER -->
            </div>
        </section>
        <!--================End Slider Area =================-->
        <!--================Our feature Area =================-->
        <section class="our_feature_area">
            <div class="container">
                <div class="feature_slider">
                        <?php foreach ($data['foods'] as $key) { ?>
                    <div class="item">
                        <div class="feature_item">
                            <div class="feature_item_inner">
                                <img src="img/foods/{{$key->food_img}} " alt="" style="width:360px; height:320px;">
                                <div class="icon_hover">
                                    <a href="{{ url('food-details', $key['id'])}}"><i class="fa fa-search"></i></a>
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
                                <div class="feature_left"><a href="{{ url('food-details', $key['id'])}}"><span>{{ $key->food_name }}</span></a></div>
                                <div class="restaurant_feature_dots"></div>
                                <div class="feature_right">${{ $key->food_price }}</div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--================End Our feature Area =================-->
        
        <!--================End Our feature Area =================-->
        <section class="most_popular_item_area" id="food_filter">
            <div class="container">
                <div class="s_white_title">
                    <h3>Most Popular</h3>
                    <h2>Today's Menu</h2>
                </div>
                <div class="popular_filter">
                    <ul>
                        <li class="active" data-filter="*"><a href="">All</a></li>
                        @foreach ($cates as $key)
                        <li data-filter=".{{$key->cate_name}}"><a href="">{{ $key->cate_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="filter-button" style="padding-bottom: 20px; text-align: center; margin-top: -35px;">
                    <form action="{{url('index')}}#food_filter" method="get">
                        <select name="filter" style="padding: 4px 25px;">
                            <option value="price_asc">Price Ascending</option>
                            <option value="price_desc">Price Descending</option>
                        </select>
                        <button type="submit" style="border: 1px solid #fff; background: #000 ;padding: 2px 15px; color: #fff; font-weight: bold;">FILTER</button>
                    </form>
                </div>
                <div class="p_recype_item_main">
                    <div class="row p_recype_item_active">
                         @foreach ($data['foods'] as $key)
                        <div class="col-md-6 {{$key->category->cate_name}}">
                            <div class="media">
                                <div class="media-left">
                                   <img style="width: 112px; height: 115px;" src="img/foods/{{ $key->food_img }}" alt="">
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
        
        <!--================Our Chefs Area =================-->
        <section class="our_chefs_area">
            <div class="container">
                <div class="s_black_title">
                    <h3>Meet</h3>
                    <h2>OUR CHEFS</h2>
                </div>
                <div class="chefs_slider_active">
                    <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="img/chef/chef-1.jpg" alt="">
                                <div class="chef_hover">
                                    <a href="#"><h4>Thomas Keller</h4></a>
                                    <h5>Chef</h5>
                                    <p>Lorem ipsum dolor sit amet et consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>Suzanne Goin</h3>
                                    <h4>Chef</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="img/chef/chef-2.jpg" alt="">
                                <div class="chef_hover">
                                    <a href="#"><h4>Thomas Keller</h4></a>
                                    <h5>Chef</h5>
                                    <p>Lorem ipsum dolor sit amet et consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>Suzanne Goin</h3>
                                    <h4>Chef</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="img/chef/chef-3.jpg" alt="">
                                <div class="chef_hover">
                                    <a href="#"><h4>Thomas Keller</h4></a>
                                    <h5>Chef</h5>
                                    <p>Lorem ipsum dolor sit amet et consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>Paul Bocuse</h3>
                                    <h4>Chef</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="img/chef/chef-4.jpg" alt="">
                                <div class="chef_hover">
                                    <a href="#"><h4>Thomas Keller</h4></a>
                                    <h5>Chef</h5>
                                    <p>Lorem ipsum dolor sit amet et consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>Giada Deen</h3>
                                    <h4>Chef</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="img/chef/chef-1.jpg" alt="">
                                <div class="chef_hover">
                                    <a href="#"><h4>Thomas Keller</h4></a>
                                    <h5>Chef</h5>
                                    <p>Lorem ipsum dolor sit amet et consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>Suzanne Goin</h3>
                                    <h4>Chef</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Chefs Area =================-->
        
        <!--================End Our Chefs Area =================-->
        <section class="next_event_area">
            <div class="container">
                <div class="s_white_red_title">
                    <h3>Events</h3>
                    <h2>Next Event</h2>
                </div>
                <div class="next_event_slider">
                    <div class="item">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="left_event_img">
                                    <img src="img/next-event/next-event-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="right_event_text">
                                    <a href="#"><h3>Opening Party - themeXart IT Farm</h3></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusqs enm tempor incididunt ut labore et dolore magna aliqua. Ut enim advastmi sunt veniam, quis nostrud exercitation... <a href="#">View Detail</a></p>
                                    <div class="event_shedule">
                                        <time datetime="P65DT05H16M22S"></time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="left_event_img">
                                    <img src="img/next-event/next-event-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="right_event_text">
                                    <a href="#"><h3>Opening Party - themeXart IT Farm</h3></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusqs enm tempor incididunt ut labore et dolore magna aliqua. Ut enim advastmi sunt veniam, quis nostrud exercitation... <a href="#">View Detail</a></p>
                                    <div class="event_shedule">
                                        <time datetime="P65DT05H16M22S"></time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="left_event_img">
                                    <img src="img/next-event/next-event-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="right_event_text">
                                    <a href="#"><h3>Opening Party - themeXart IT Farm</h3></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusqs enm tempor incididunt ut labore et dolore magna aliqua. Ut enim advastmi sunt veniam, quis nostrud exercitation... <a href="#">View Detail</a></p>
                                    <div class="event_shedule">
                                        <time datetime="P65DT05H16M22S"></time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Chefs Area =================-->
        
        <!--================Recent Blog Area =================-->
        <section class="recent_bloger_area">
            <div class="container">
                <div class="s_black_title">
                    <h3>News</h3>
                    <h2>Recent Blog</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="recent_blog_item">
                            <div class="blog_img">
                                <img src="img/blog/recent-blog/recent-blog-1.jpg" alt="">
                            </div>
                            <div class="recent_blog_text">
                                <div class="recent_blog_text_inner">
                                    <h6><a href="#">Articles</a></h6>
                                    <a href="blog-details.html"><h5>Restaurant Industry & News</h5></a>
                                    <p>Lorem Ipsum is simpily dummy texts printing and typesetting industry.</p>
                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>
                                    <a href="#">No Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="recent_blog_item">
                            <div class="blog_img">
                                <img src="img/blog/recent-blog/recent-blog-2.jpg" alt="">
                            </div>
                            <div class="recent_blog_text">
                                <div class="recent_blog_text_inner">
                                    <h6><a href="#">Articles</a></h6>
                                    <a href="blog-details.html"><h5>Restaurant Industry & News</h5></a>
                                    <p>Lorem Ipsum is simpily dummy texts printing and typesetting industry.</p>
                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>
                                    <a href="#">No Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="recent_blog_item">
                            <div class="blog_img">
                                <img src="img/blog/recent-blog/recent-blog-3.jpg" alt="">
                            </div>
                            <div class="recent_blog_text">
                                <div class="recent_blog_text_inner">
                                    <h6><a href="#">Articles</a></h6>
                                    <a href="blog-details.html"><h5>Restaurant Industry & News</h5></a>
                                    <p>Lorem Ipsum is simpily dummy texts printing and typesetting industry.</p>
                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>
                                    <a href="#">No Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Recent Blog Area =================-->
        
        <!--================End Recent Blog Area =================-->
@endsection