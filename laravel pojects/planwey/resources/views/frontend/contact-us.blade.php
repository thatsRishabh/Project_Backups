@extends('frontend.layout.containent')

@section('main-container')

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--ttm-header-wrap end -->
        </header>
        <!--header end-->
        <!--page-title-start-->
        <div class="ttm-page-title-row text-center">
            <div class="section-overlay"></div>
            <div class="title-box text-center">
                <div class="container">
                    <div class="page-title-heading">
                        <h1 class="title">CONTACT US</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <div class="container">
                            <span><a title="Homepage" href="index.html"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a></span>
                            <span class="ttm-bread-sep ttm-textcolor-white"> &nbsp; ⁄ &nbsp;</span>
                            <span class="ttm-textcolor-white"> Contact Us</span>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
        <!--page-title-end-->

        <!--syte-main start-->
        <div class="site-main">
            <!--contact-intro-section-start-->
            <section class="ttm-row contact-details-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row text-left">
                        <div class="col-lg-9 col-md-9">
                            <div class=" section-title clearfix">
                                <h4>GET IN TOUCH</h4>
                                <h2 class="title">Contact Us</h2>
                                <div class="heading-seperator"><span></span></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’type specimen book.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-btn-style-border ttm-btn-color-black mt-55 pull-right mb-25" href="#" title="">View Events</a>
                        </div>
                    </div><!--row-end-->
                    <div class="row mt-25">
                        <div class="col-md-4">
                            <div class="featured-box style2 left-icon icon-align-top">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-size-sm ttm-icon_element-color-skincolor ttm-icon_element-style-round">
                                        <i class="ti ti-headphone-alt"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Phone</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Phone 01:+1800 565 5658,<br>Phone 01:+1800 565 5658,</p>
                                    </div>
                                </div>
                            </div><!-- featured-box end-->
                        </div>
                        <div class="col-md-4">
                            <div class="featured-box style2 left-icon icon-align-top">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-size-sm ttm-icon_element-color-skincolor ttm-icon_element-style-round">
                                        <i class="ti ti-location-pin"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Address</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>254 Monteral Ave musiam Staren<br>New Jersey USA 789 456</p>
                                    </div>
                                </div>
                            </div><!-- featured-box end-->
                        </div>
                        <div class="col-md-4">
                            <div class="featured-box style2 left-icon icon-align-top">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-size-sm ttm-icon_element-color-skincolor ttm-icon_element-style-round">
                                        <i class="ti ti-email"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>E-Mail</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>info@example.com,<br>planwey2@gmail.com</p>
                                    </div>
                                </div>
                            </div><!-- featured-box end-->
                        </div>
                    </div>
                </div>
            </section>
            <!--contact-intro-section-end-->
            <section class="ttm-row contact-form-section2 bg-layer break-991-colum clearfix">
                <div class="container">
                   <div class="row res-1199-mlr-15">
                        <div class="col-md-4 col-lg-4">
                            <!-- col-bg-img-three -->
                            <div class="col-bg-img-three ttm-col-bgimage-yes ttm-bg">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content"></div>
                            </div><!-- col-bg-img-three end-->
                            <img src="images/bg-image/col-bgimage-3.jpg" class="ttm-equal-height-image" alt="bg-image">
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <div class="padding-12 box-shadow">
                                <!-- section title -->
                                <div class="section-title clearfix mb-30">
                                    <h3 class="title">Get The Party Started</h3>
                                    <p>As the premier event planning company in the area. Each event and client is unique and we believe our services should be as well.</p>
                                </div><!-- section title end -->
                                <form id="contactform" class="row contactform wrap-form clearfix" method="post" action="#" novalidate="novalidate">
                                    <label class="col-md-6">
                                        <i class="ti ti-user"></i>
                                        <span class="ttm-form-control"><input class="text-input" name="name" type="text" value="" placeholder="Your Name:*" required="required"></span>
                                    </label>
                                    <label class="col-md-6">
                                        <i class="ti ti-email"></i>
                                        <span class="ttm-form-control"><input class="text-input" name="email" type="text" value="" placeholder="Your email-id:*" required="required"></span>
                                    </label>
                                     <label class="col-md-6">
                                        <i class="ti ti-location-pin"></i>
                                        <span class="ttm-form-control"><input class="text-input" name="venue" type="text" value="" placeholder="Venue" required="required"></span>
                                    </label>
                                    <label class="col-md-6">
                                        <i class="ti ti-mobile"></i>
                                        <span class="ttm-form-control"><input class="text-input" name="phone" type="text" value="" placeholder="Your Number:*" required="required"></span>
                                    </label>
                                    <label class="col-md-12">
                                        <i class="ti ti-comment"></i>
                                        <span class="ttm-form-control"><textarea class="text-area" name="message" placeholder="Your Message:*" required="required"></textarea></span>
                                    </label>
                                    <input name="submit" type="submit" value="Make a Reservation" class="ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-btn-style-fill ttm-btn-color-skincolor mt-20" id="submit" title="Make a Reservation">
                               </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <!--map-start-->
            <div class="map-wrapper">
                <div id="map_canvas"></div>
            </div>
            <!--map-end-->
            <!--CTA-section-start-->
            <section class="ttm-row cta-section style2 ttm-bgcolor-skincolor clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="featured-box iconalign-before-heading">
                                <div class="featured-content">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-sm"> 
                                            <i class="ti ti-headphone"></i>
                                        </div>
                                    </div>
                                    <div class="featured-title">
                                        <h6 class="ttm-textcolor-white">If you Have Any Questions Schedule an Booking</h6>
                                        <h5 class="ttm-textcolor-white">With our Team or call Us On (020) 123-456-7890</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-btn-style-border ttm-btn-color-white pull-right res-mt20-767" href="#">Booking Now!</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--CTA-section-END-->
           
        </div><!-- site-main end --> 

       <!--footer--> 
        <footer class="footer widget-footer bg-img11 ttm-bgcolor-black ttm-bg ttm-bgimage-yes clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="first-footer ttm-textcolor-white">
                <div class="container">
                       <div class="row">
                        <div class="widget-area col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <aside class="widget widget-text">
                                <div class="ttm-newstter-box">
                                    <h4>Subscribe to <span class="ttm-textcolor-skincolor">Our Newsletter</span></h4>
                                    <p>No spam message from us, only give you latest offer which is best for you and your business</p>
                                    <form class="mc4wp-form mc4wp-form-24" method="post" data-id="24" data-name="Newsletter Form">
                                        <div class="mc4wp-form-fields">
                                            <div class="mailchimp-inputbox">
                                                <input type="email" name="EMAIL" placeholder="Your email address.." required="">
                                                <input type="submit" value="Subscribe Now">
                                            </div>
                                        </div>
                                        <div class="mc4wp-response"></div>
                                    </form>
                                </div>
                            </aside>
                        </div>
                    </div><!-- row end --> 
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <div class="second-footer-inner">
                        <div class="row">
                            <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="widget widget-out-link clearfix">
                                    <h4 class="widget-title">Contact Us</h4>
                                    <ul class="widget-contact">
                                        <li><i class="fa fa-map-marker"></i>Themeforest, Envanto HQ<br>24 Fifth st., Los Angeles, USA</li>
                                        <li><i class="fa fa-envelope-o"></i><a href="#">info@example.com</a></li>
                                        <li><i class="fa fa-phone"></i>Phone: (+01) 123 456 7890 <br>Support: (+01) 123 456 7890  </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="widget widget_nav_menu clearfix">
                                    <h4 class="widget-title">Our Services </h4>
                                    <ul class="menu-footer-services">
                                        <li><a href="#">Our Story</a></li>
                                        <li><a href="#">Our Gallery</a></li>
                                        <li><a href="#">Event Guides</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Latest News</a></li>
                                        <li><a href="#">Pricing & Terms</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="widget widget-out-link clearfix ">
                                    <h4 class="widget-title">Recent Posts</h4>
                                    <ul class="widget-post ttm-recent-post-list">
                                        <li>
                                            <a href="#"><img src="images/blog/blog7.jpg" alt="post-img"></a>
                                            <a href="single-blog.html">Our Biggest Summer Meetup</a>
                                            <span class="post-date clearfix">August 1, 2018</span>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/blog/blog3.jpg" alt="post-img"></a>
                                            <a href="single-blog.html">5 Steps To Planning A Sweet Party</a>
                                            <span class="post-date clearfix">August 1, 2018</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="widget widget-out-link clearfix ">
                                    <h4 class="widget-title">Frequent Questions</h4>
                                    <ul class="widget-text">
                                        <li><a href="#">How Can I Set An Event? </a></li>
                                        <li><a href="#">What Venues Do You Use? </a></li>
                                        <li><a href="#">Event Catalogue </a></li>
                                        <li><a href="#">Shipping & Delivery </a></li>
                                        <li><a href="#">What's your dream job? </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 ttm-footer2-left">
                            <div class="company-info">
                                <div class="company-logo">
                                    <img src="images/logo-img.png" alt="company-logo" height="45">
                                </div>
                                <div class="company-desc">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesue corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culp.
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-4 ttm-footer2-right">
                            <div class="ttm-social-link-wrapper">
                                <ul class="social-icons">
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                            <P>Copyright © 2018 PresentUp. All rights reserved.</P>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer-END-->

</div><!-- page end -->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->



    <!-- Javascript -->

    <script src="{{url('frontend/js/jquery.min.js')}}"></script>
    <script src="{{url('frontend/js/tether.min.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script> 
    <script src="{{url('frontend/js/jquery.easing.js')}}"></script>
    <script src="{{url('frontend/js/jquery-validate.js')}}"></script>     
    <script src="{{url('frontend/js/jquery-waypoints.js')}}"></script>    
    <script src="{{url('frontend/js/owl.carousel.js')}}"></script>
    <script src="{{url('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key="></script>
    <script src="{{url('frontend/js/main.js')}}"></script>


     <script>

        function initialize() {
            var latlng = new google.maps.LatLng(-34.397, 150.644);
            var myOptions = {
                zoom: 8,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
                    myOptions);
        }
        google.maps.event.addDomListener(window, "load", initialize);

    </script>


</body>

<!-- Mirrored from themetechmount.com/html/planwey/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 08:30:49 GMT -->
</html>

@endsection