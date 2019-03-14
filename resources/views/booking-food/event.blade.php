@extends('layouts.master')
@section('title', 'Event')
@section('menu-top')    
@parent
@endsection 
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>Event Form</h4>
                    <a href="#">Home</a>
                    <a class="active" href="table.html">Event Form</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Booking Table Area =================-->
        <section class="booking_table_area booking_area_white">
            <div class="container">
                <div class="s_black_title">
                    <h3>Book a</h3>
                    <h2>Table</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <form class="form_area">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <div class="input-append date form_datetime">
                                <input size="16" type="text" value="" readonly placeholder="Date">
                                <span class="add-on"><i class="icon-th"></i></span>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <div class="input-append date form_time">
                                <input size="16" type="text" value="" readonly placeholder="Dining Time">
                                <span class="add-on"><i class="icon-th"></i></span>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <div class="party_size">
                                <select class="selectpicker">
                                    <option>Party Size</option>
                                    <option>Party Size 2</option>
                                    <option>Party Size 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="phone" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" rows="3" placeholder="Additional notes.."></textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="button" class="btn btn-default submit_btn">BOOK MY TABLE</button>
                        </div>
                    </div>
                </form>
                <div class="row map_contact">
                    <div class="col-md-6">
                        <div class="map_area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387145.8666396062!2d-74.25819367467702!3d40.70531099097622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1489317146051" style="border:0"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map_contact_info">
                            <h3>Contact Information</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor utim labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <ul>
                                <li><a href="#"><span>Address:</span>RedCayenne Restaurant, 414 Columbus Ave, San Francisco, CA 94133</a></li>
                                <li><a href="#"><span>Phone:</span>+0 000-000-0000</a></li>
                                <li><a href="#"><span>Email</span> support@themeXart.com</a></li>
                            </ul>
                            <h4>Opening Times</h4>
                            <h5>Monday - Friday 9am - 11pm</h5>
                            <h5>Saturday 2pm - 10pm | Sunday 2pm - 10pm</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Booking Table Area =================-->
        