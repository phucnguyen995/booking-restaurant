@extends('layouts.master')
@section('title', 'Category')
@section('menu-top')    
@parent
@endsection  
@section('content')
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>Category List</h4>
                    <a href="<?php echo url('index')?>">Home</a>
                    <a class="active" href="<?php echo url('category')?>">Category</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog List Area =================-->
        <section class="blog_list_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <?php 
                                foreach($cates as $key)
                                {
                            ?>
                            <article class="blog_list_item row m0">
                                <div class="col-md-4">
                                    <div class="blog_list_img">
                                        <img src="img/category/<?php echo $key['cate_img']; ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="blog_list_content">
                                        <h3><?php echo $key['cate_name']; ?></h3>
                                        
                                        <p><?php echo $key['cate_desc']; ?></p>
                                        <div class="pull-left">
                                            <a class="event_btn" href="<?php echo url('details-cate', $key['id'])?>">READ MORE</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#"><i class="fa fa-eye"></i>206</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>19</a>
                                            <a href="#"><i class="fa fa-heart-o"></i>206</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php } ?>
                        </div>
                        <nav aria-label="Page navigation" class="blog_pagination">
                            <?php //echo $cate->render(); ?>
                    </div>
                    <div class="col-md-4">
                        <div class="blog_right_sidebar">
                            <aside class="right_widget search_widget">
                                <form action="{{url('search')}}#search_rs" method="get">  
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

        