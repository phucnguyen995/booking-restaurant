@extends('layouts.master')
@section('title', 'Food Details')
@section('menu-top')    
@parent
@endsection 
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>Food Details</h4>
                    <a href="<?php echo url('index')?>">Home</a>
                    <a href="<?php echo url('category')?>">Categories</a>
                    <a class="active" href="">Food Details</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog List Area =================-->
        <section class="blog_list_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row m0">
                            <style type="text/css">
                            .list_food {font-size: 1.5em; margin-bottom: 20px;} .active {color: red;}
                            .list_food a {color: #000; font-family: Roboto; font-weight: bold;}
                        </style>
                        <div class="list_food">
                            <i class="fa fa-home"><a href="{{url('index')}}"> Home > </a></i>
                            <a href="{{url('category')}}">Category > </a>
                            <a class="active"><?php echo 'Food Details' ?></a>
                           
                        </div> 
                            <div class="blog_details_inner">
                                <div class="blog_details_content">
                                    <img src="../img/foods/<?php echo $details['food_img'] ?>" alt="">
                                    <h3><b><?php echo $details['food_name'] ?></b></h3>
                                    <h3>Price : $<?php echo $details['food_price'] ?></h3>
                                    <p><?php echo $details['food_desc'] ?></p>
                                </div>
                                <br>
                                <div>
                                   
                                     <form method="post" action="<?php echo url('cart') ?>">
                                        <input type="hidden" name="id" value="<?php echo $details['id']?>">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-danger">
                                             Add to cart
                                        </button>
                                    </form>
                                </div>
                                <div class="blog_details_tags_area">
                                    <div class="pull-left">
                                        <a href="#">Restaurant ,</a>
                                        <a href="#">Barbecue ,</a>
                                        <a href="#">Pub ,</a>
                                        <a href="#">Bar ,</a>
                                        <a href="#">Design</a>
                                    </div>
                                    <div class="pull-right">
                                        <h4>Share :</h4>
                                        <ul class="social_icon2">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="comment_list_area">
                                    @if ($comment->count() > 0)
                                    <h3> {{ $comment->count() }} COMMENTS</h3>

                                    @foreach($comment as $cmt)
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="../img/comment-user/comment-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>{{ $cmt->name }}</h4>
                                            <h5>{{$cmt->email}}</h5>
                                            <h5>{{$cmt->create_at}}</h5>
                                            <p>{{$cmt->content}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                     <h3> 0 COMMENTS</h3>
                                    @endif
                                </div>
                                @if(Auth::user())
                                <div class="comment_form_area">
                                    <h3>Post A Comment</h3>
                                    <div class="row">
                                        <form action="{{ url('food-details',$details['id'] ) }}" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                             <div class="form-group col-md-6">
                                                <label for="name">Name<span>*</span></label>
                                                <input required="required" type="text" class="form-control" name="name" id="name" value="{{Auth::user()->name}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email<span>*</span></label>
                                                <input type="email" value="{{Auth::user()->email}}" class="form-control" name="email" id="email">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="comment">YOUR COMMENT</label>
                                                <textarea name="comment" id="comment" rows="1"></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="btn btn-default submit_btn_bg">Post Comment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                 @else
                                 <div class="comment_form_area">
                                    <h3>Post A Comment</h3>
                                    <div class="row">
                                         <form action="{{ url('food-details',$details['id'] ) }}" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                             <div class="form-group col-md-6">
                                                <label for="name">Name<span>*</span></label>
                                                <input required="required" type="text" class="form-control" name="name" id="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email<span>*</span></label>
                                                <input type="email" class="form-control" name="email" id="email">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="comment">YOUR COMMENT</label>
                                                <textarea name="comment" id="comment" rows="1"></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="btn btn-default submit_btn_bg">Post Comment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                               
                                  @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog_right_sidebar">
                            <aside class="right_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
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
                                    <li><a href="#"><i class="fa fa-chevron-right"></i><?php echo strtoupper($key['cate_name']); ?></a></li>
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
                                        <img src="img/blog/recent-post/recent-post-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>Tailgating with Simon's Cheese: Bratwurst and Sauerkraut Pizza Recipe.</h4></a>
                                        <h5>November 18, 2017</h5>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/blog/recent-post/recent-post-2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>Tailgating with Simon's Cheese: Bratwurst and Sauerkraut Pizza Recipe.</h4></a>
                                        <h5>November 18, 2017</h5>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/blog/recent-post/recent-post-3.jpg" alt="">
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
        <!--================End Blog List Area =================-->
        
        
        
                  