@extends('layouts.master')
@section('title', 'Search Result')
@section('menu-top')    
@parent
@endsection  
@section('content')
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>Search</h4>
                    <a href="<?php echo url('index')?>">Home</a>
                    <a class="active" href="">Search Result</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog List Area =================-->
        <section class="blog_list_area" id="search_rs">
            <div class="container">
                <h3>Search result :  <?php echo $_GET['keySearch']; ?></h3>
                <br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            @if($fResult->count() == 0)
                                <h2>No Result</h2>
                            @else
                               @foreach($fResult as $key)
                             
                            <article class="blog_list_item row m0">
                                <div class="col-md-4">
                                    <div class="blog_list_img">
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
                            </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="blog_list_content">
                                        <h3> <a href="{{ url('food-details', $key->id)}}"><?php echo $key->food_name; ?></a></h3>
                                        
                                        <p><?php echo $key->food_desc; ?></p>
                                        <div class="pull-left">
                                        <form method="post" action="<?php echo url('cart') ?>">
                                            <input type="hidden" name="id" value="<?php echo $key->id?>">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn event_btn">
                                                 Add to cart
                                            </button>
                                        </form>
                                        </div>
                                        <div class="pull-right">
                                            
                                            <a href="{{ url('food-details', $key->id)}}#comment_dt"><i class="fa fa-comment-o"></i>19</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                            @endif
                        </div>
                                <?php
                                $fResult->setPath('search');
                                 echo $fResult->appends(["keySearch"=>$_GET['keySearch']])->render();

                                  ?>
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
        
        <!--================End Recent Blog Area =================-->
        
        <!--================End Recent Blog Area =================-->
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/countdown/jquery.countdown.js"></script>
        <script src="vendors/js-calender/zabuto_calendar.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>