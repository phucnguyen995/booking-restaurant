@extends('layouts.master')
@section('title', 'Detail Category Food')
@section('menu-top')    
@parent
@endsection 
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>Detail Category Foods</h4>
                    <a href="{{url('index')}}">Home</a>
                    <a href="{{url('category')}}">Category</a>
                    <a class="active" href=""><?php echo strtoupper($data['cate_details']->cate_name); ?></a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
 

        <!--================End Our Gallery Area =================-->
        <section class="blog_list_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                        <style type="text/css">
                            .list_food {font-size: 1.5em; margin-bottom: 20px;} .active {color: red;}
                            .list_food a {color: #000; font-family: Roboto; font-weight: bold;}
                        </style>
                        <div class="list_food">
                            <i class="fa fa-home"><a href="{{url('index')}}"> Home > </a></i>
                            <a href="{{url('category')}}">Category > </a>
                            <a class="active" href=""><?php echo strtoupper($data['cate_details']->cate_name); ?></a>
                           
                        </div> 
                        <b><h2>List Foods</h2></b>
                        <div class="row our_gallery_ms_inner">

                            @foreach ($data['foodLC'] as $key)

                            <div class="col-md-4 col-sm-12">
                                <div class="our_gallery_item">
                                    <img src="../img/foods/{{ $key->food_img }}" alt="" style="width:100%;height:200px;">
                                    <div class="our_gallery_hover">
                                        <a href="{{ url('food-details', $key->id)}}"><i class="fa fa-search"></i></a>
                                        <form method="post" action="<?php echo url('cart') ?>">
                                            <input type="hidden" name="id" value="<?php echo $key->id?>">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" style="background: none; border: none;">
                                               <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </form>
                                        <a href="{{ url('food-details', $key->id)}}"><h5>{{ $key->food_name}} </h5></a>
                                         <h2 style="color: #fff;">$ {{$key->food_price }}</h2>
                                    </div>
                                </div>
                            </div>
                    @endforeach

                </div>
                          
                        </div>
                        <nav aria-label="Page navigation" class="blog_pagination">
                            <?php //echo $cate->render(); ?>
                    </div>
                    <div class="col-md-4">
                        <div class="blog_right_sidebar">
                            <aside class="right_widget search_widget">
                                <form action="{{url('search')}}" method="get">
                                    
                                    <div class="input-group">
                                    <input type="text"
                                    name="keySearch" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                    </div>
                                </form>
                                
                            </aside>
                            <aside class="right_widget category_widget">
                                <div class="sidebar_title">
                                    <h3>Categories</h3>
                                </div>
                                <ul>

                                <?php 
                                    foreach($cates as $key)
                                    {
                                ?>
                                    <li><a href="<?php echo url('details-cate', $key['id'])?>"><i class="fa fa-chevron-right"></i><?php echo strtoupper($key['cate_name']); ?></a></li>
                                   <?php } ?>
                                </ul>
                            </aside>
                            <aside class="right_widget calender_widget">
                               <div class="sidebar_title">
                                    <h3>Calendar</h3>
                                </div>
                                <div id="my-calendar"></div>
                            </aside>
                            <aside class="right_widget category_widget">
                                <div class="sidebar_title">
                                    <h3>Archives</h3>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i>November 2017</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i>August 2017</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i>July 2017</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i>June 2017</a></li>
                                </ul>
                            </aside>
                            <aside class="right_widget recent_widget">
                                <div class="sidebar_title">
                                    <h3>RECENT POST</h3>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="../img/blog/recent-post/recent-post-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>Tailgating with Simon's Cheese: Bratwurst and Sauerkraut Pizza Recipe.</h4></a>
                                        <h5>November 18, 2017</h5>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="../img/blog/recent-post/recent-post-2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>Tailgating with Simon's Cheese: Bratwurst and Sauerkraut Pizza Recipe.</h4></a>
                                        <h5>November 18, 2017</h5>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="../img/blog/recent-post/recent-post-3.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>Tailgating with Simon's Cheese: Bratwurst and Sauerkraut Pizza Recipe.</h4></a>
                                        <h5>November 18, 2017</h5>
                                    </div>
                                </div>
                            </aside>
                            <aside class="right_widget tags_widget">
                                <div class="sidebar_title">
                                    <h3>Tags</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Barbecue</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Pub</a></li>
                                    <li><a href="#">Marketing</a></li>
                                    <li><a href="#">html</a></li>
                                    <li><a href="#">Bar</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">WordPress</a></li>
                                    <li><a href="#">Optimization</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Recent Blog Area =================-->