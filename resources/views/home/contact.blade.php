@include('home.header')



<!-- Banner/Slider -->
<div class="page-head section row-vm light">
    <div class="imagebg">
        <img src="images/header-bg-b.jpg" alt="page-head">
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>Contact Us</h2>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="home">Home</a></li>
                        <li class="active"><span>Contact Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #end Banner/Slider -->
</header>	





<!-- Section -->
<div class="section section-pad">
<div class="container">
    <div class="row">
        <div class="col-md-8 res-m-bttm">
            <div class="contact-information">
                <h4>Contact Information</h4>
                <div class="row">
                    <div class="col-sm-4 res-m-bttm">
                        <div class="contact-entry">
                            <h6>Crypto<span>Coin</span></h6>
                            <p> 326, San Antonio, Texas (TX), USA</p>
                        </div>
                    </div>
                    <div class="col-sm-4 res-m-bttm">
                        <div class="contact-entry">
                            <h6>contact Email</h6>
                            <p>Email:  <a href="mailto: support@Metalglobalmarket.com">support@Metalglobalmarket.com</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4 res-m-bttm">
                        <div class="contact-entry">
                            <h6>office hours</h6>
                            <p>monday - friday<br/>8:30am - 5:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <p>Complete and submit the form below</p>
                <form id="contact-form" class="form-message" action="" method="post">
                    <div class="form-results"></div>
                    <div class="form-group row">
                        <div class="form-field col-sm-6 form-m-bttm">
                            <input name="name" type="text" placeholder="Full Name *" class="form-control required">
                        </div>
                        <div class="form-field col-sm-6">
                            <input name="email" type="email" placeholder="Email *" class="form-control required email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <div class="form-field col-sm-6 form-m-bttm">
                            <input name="contact-phone" type="text" placeholder="Phone Number *" class="form-control required">
                        </div> -->
                        <div class="form-field col-sm-12">
                            <input name="subject" type="text" placeholder="Subject *" class="form-control required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-field col-md-12">
                            <textarea name="message" placeholder="Messages *" class="txtarea form-control required"></textarea>
                        </div>
                    </div>
                    <input type="text" class="hidden" name="form-anti-honeypot" value="">
                    <button type="submit"  name="contact" class="btn btn-alt">Submit</button>
                </form>
            </div>
        </div><!-- .col  -->
        <div class="col-md-4">
            <div id="gMap" class="google-map"></div>
            <a href="#" class="map-link">View on google map <span class="fa fa-caret-right"></span></a>
        </div><!-- .col  -->
    </div>
</div>	
</div>
<!-- End Section -->




<!-- Section -->
<div class="section section-pad-md bg-grey">
 <div class="container">
     <div class="content row">
         <div class="owl-carousel has-carousel no-dots" data-items="6" data-loop="true" data-dots="false" data-auto="false">
             <div class="logo-item"><img alt="" width="190" height="82" src="images/logo/1.png"></div>
             <div class="logo-item"><img alt="" width="190" height="82" src="images/logo/2.png"></div>
             <div class="logo-item"><img alt="" width="190" height="82" src="images/logo/3.png"></div>
             <div class="logo-item"><img alt="" width="190" height="82" src="images/logo/4.png"></div>
             <div class="logo-item"><img alt="" width="190" height="82" src="images/logo/5.png"></div>
             <div class="logo-item"><img alt="" width="190" height="82" src="images/logo/6.png"></div>
         </div>

     </div>
 </div>
</div>
<!-- End Section -->
    
    
    @include('home.footer')
    
