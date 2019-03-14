@extends('layouts.master')
@section('title', 'Table Form')
@section('menu-top')    
@parent
@endsection  
@section('content')
        
        <!--================Banner Area =================-->
        <?php if(isset($_POST['date_book']))
        {echo $_POST['date_book'];}
         ?>
        
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>Table Form</h4>
                    <a href="#">Home</a>
                    <a class="active" href="table.html">Table Form</a>
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
            <form action="{{action('FoodController@book_table')}}" method="post">
                <div class="row">
                    <div class="col-md-3">
                 
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="input-append date form_datetime">
                            <input size="16" type="text" name="date_book" readonly placeholder="Date">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="party_size">
                           <select class="selectpicker" name="time">
                                <option disabled="disabled">Time</option>
                                <option value="9:00AM">9:00 AM</option>
                                <option value="10:00AM">10:00 AM</option>
                                <option value="11:00AM">11:00 AM</option>
                                <option value="13:00PM">13:00 PM</option>
                                <option value="14:00PM">14:00 PM</option>
                                <option value="15:00PM">15:00 PM</option>
                                <option value="16:00PM">16:00 PM</option>
                                <option value="17:00PM">17:00 PM</option>
                                <option value="18:00PM">18:00 PM</option>
                                <option value="19:00PM">19:00 PM</option>   
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="party_size">
                            <select name="party_size" class="selectpicker" >
                                <option disabled="disabled">Party Size</option>
                                <option value="2">Party Size 2</option>
                                <option value="4">Party Size 4</option>
                                <option value="6">Party Size 6</option>
                                <option value="8">Party Size 8</option>
                                <option value="10">Party Size 10</option>
                                <option value="12">Party Size 12</option>
                            </select>
                        </div>
                    </div>
                    <?php if(Auth::check())
                    { ?>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-default submit_btn">BOOK MY TABLE</button>
                        </div>
                    </form>
                   <?php }
                    else
                    { ?>
                        <div class="col-md-3">
                            <a href="{{url('auth/login')}}" type="button" onclick="alert('You need to login');" class="btn btn-default submit_btn">BOOK MY TABLE</a>
                        </div>
                    </form>
                    <?php } ?>
                   
                </div>
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
                                <li><a href="#"><span>Phone</span> support@themeXart.com</a></li>
                            </ul>
                            <h4>Opening Times</h4>
                            <h5>Monday - Sunday 9am - 21pm</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Booking Table Area =================-->
        