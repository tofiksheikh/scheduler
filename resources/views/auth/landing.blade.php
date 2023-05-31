<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="{{ asset('frontend/auth/images/favicon.png') }}" rel="icon">
  <!--  CSS Files -->
  <link href="{{ asset('frontend/auth/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/auth/css/owl.carousel.min.css') }}">
  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/auth/css/style.css') }}" rel="stylesheet" />
  <title>Welcome to Appointy</title>
</head>
<body>   

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{ asset('frontend/auth/images/logo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Solutions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary" href="{{url('signin')}}" >Sign In</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner_img">
                    <div class="bannerMeta topmeta"><img src="{{ asset('frontend/auth/images/1.png') }}"> <div class="bannerInfo"> Meeting confirmed at <br><strong> 3:00 PM today!</strong></div></div>
                    <img src="{{ asset('frontend/auth/images/banner1.png') }}">
                    <div class="bannerMeta bottommeta"><img src="{{ asset('frontend/auth/images/2.png') }}"> <div class="bannerInfo">Received a meeting   <br> invitation at  <strong> 6 PM today! </strong></div></div>
                </div>
            </div>
            <div class="col-md-6">
                <h1>Schedule like a <span>pro.</span></h1>
                <p>Appointy empowers independent beauty, wellness, and lifestyle professionals to grow their businesses with ease and consistency</p>
                <a href="#" class="btn btn-secondary">Get Started</a>
            </div>
        </div>
    </div>
</section>
<section id="feature">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <img src="{{ asset('frontend/auth/images/f1.png') }}">
                <h3>Online Appointment Scheduling</h3>
                <p>2meetup saves you time and keeps track of your clients</p>
            </div>
            <div class="col-sm-4">
                <img src="{{ asset('frontend/auth/images/f2.png') }}">
                <h3>Messenger reminders</h3>
                <p>2meetup finds a client in Telegram or WhatsApp and reminds aboutthe meeting</p>
            </div>
            <div class="col-sm-4">
                <img src="{{ asset('frontend/auth/images/f3.png') }}">
                <h3>Coach CRM</h3>
                <p>Client log, contacts, notes and more</p>
            </div>
        </div>
    </div>
</section>
<section id="spFeature">
    <div class="container">
        <div class="title text-center"><h2>Special features for teams who conduct <br> meetings at <span>scale</span></h2></div>
        
        <div class="d-flex align-items-start">
          <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-sales-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sales" type="button" role="tab" aria-controls="v-pills-sales" aria-selected="true"><span><img src="{{ asset('frontend/auth/images/s1.png') }}"></span> Sales</button>

            <button class="nav-link" id="v-pills-marketing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-marketing" type="button" role="tab" aria-controls="v-pills-marketing" aria-selected="false"><span><img src="{{ asset('frontend/auth/images/s2.png') }}"></span>  Marketing</button>

            <button class="nav-link" id="v-pills-customerSucc-tab" data-bs-toggle="pill" data-bs-target="#v-pills-customerSucc" type="button" role="tab" aria-controls="v-pills-customerSucc" aria-selected="false"><span><img src="{{ asset('frontend/auth/images/s3.png') }}"></span>  Customer Sucess</button>

            <button class="nav-link" id="v-pills-recruting-tab" data-bs-toggle="pill" data-bs-target="#v-pills-recruting" type="button" role="tab" aria-controls="v-pills-recruting" aria-selected="false"><span><img src="{{ asset('frontend/auth/images/s4.png') }}"></span>  Recruting</button>

            <button class="nav-link" id="v-pills-it-tab" data-bs-toggle="pill" data-bs-target="#v-pills-it" type="button" role="tab" aria-controls="v-pills-it" aria-selected="false"><span><img src="{{ asset('frontend/auth/images/s5.png') }}"></span>  Information Technology</button>
             <button class="nav-link" id="v-pills-education-tab" data-bs-toggle="pill" data-bs-target="#v-pills-education" type="button" role="tab" aria-controls="v-pills-education" aria-selected="false"><span><img src="{{ asset('frontend/auth/images/s6.png') }}"></span>  education</button>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-sales" role="tabpanel" aria-labelledby="v-pills-sales-tab">
                <div class="row">
                     <div class="col-lg-6">
                            <div class="banner_img">
                            <div class="bannerMeta topmeta"><div class="bannerInfo">Maximum people complete their
business deals on appointy</div></div>
                            <img src="{{ asset('frontend/auth/images/banner3.png') }}">
                            <div class="bannerMeta bottommeta"><div class="bannerInfo">Keep your deal momentum high
and remove scheduling friction</div></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="featureList">
                            <li>
                                <img src="{{ asset('frontend/auth/images/scale1.png') }}">
                                <h4>Drive more revenue</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </li>
                            <li>
                                <img src="{{ asset('frontend/auth/images/scale2.png') }}">
                                <h4>Speed up your sales cycle</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </li>
                            <li>
                                <img src="{{ asset('frontend/auth/images/scale3.png') }}">
                                <h4>Close more deals</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </li>
                        </ul>
                        <a href="#" class="learMoreBtn">Learn more</a>
                    </div>
                   
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-marketing" role="tabpanel" aria-labelledby="v-pills-marketing-tab">...</div>
            <div class="tab-pane fade" id="v-pills-customerSucc" role="tabpanel" aria-labelledby="v-pills-customerSucc-tab">...</div>
            <div class="tab-pane fade" id="v-pills-recruting" role="tabpanel" aria-labelledby="v-pills-recruting-tab">...</div>

            <div class="tab-pane fade" id="v-pills-it" role="tabpanel" aria-labelledby="v-pills-it-tab">...</div>
             <div class="tab-pane fade" id="v-pills-education" role="tabpanel" aria-labelledby="v-pills-education-tab">...</div>


          </div>
        </div>

    </div>
</section>
<section id="eaperience">
    <div class="container">
        <div class ="title text-center">
            <h2>Deliver the best <span>experience</span></h2> 
            <p>Help people book meeting rooms, change desks, and find their <br> teammates quicker. No wandering. No wondering.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="banner_img">
                    <div class="bannerMeta topmeta"><div class="bannerInfo">Employees can book exactly what they need 
                        <span class="text-primary">before arriving</div></div>
                    <img src="{{ asset('frontend/auth/images/banner1.png') }}">
                    <div class="bannerMeta bottommeta"><div class="bannerInfo"> Quickly check availability and see who is  <span class="text-primary"> in the office</span> </div></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                <div class="accordion" id="myAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button type="button" class="accordion-button " data-bs-toggle="collapse" data-bs-target="#collapseOne">Online Appointment Scheduling</button>                                  
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p>2meetup saves you time and keeps track of your clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Support hybrid work with flexible schedules</button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse " data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p>2meetup saves you time and keeps track of your clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">See who’s in and what's available</button>                     
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p>2meetup saves you time and keeps track of your clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">Measure office demand</button>                     
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                                <p>2meetup saves you time and keeps track of your clients</p>
                            </div>
                        </div>
                    </div>


                </div></div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#"><img src="{{ asset('frontend/auth/images/footer-logo.png') }}"></a>
                <p class="mt-3">Lorem Ipsum is simply dummy text of the printing</p>
            </div>
             <div class="col-md-3">
                <h5>Community</h5>
                <ul>
                    <li><a href="#">Community</a></li>
                </ul>
             </div>
             <div class="col-md-3">
                <h5>Site Map</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Team & Companies</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Resources</a></li>
                </ul>
             </div>
             <div class="col-md-3">
                <h5>Contacts</h5>
                <ul>
                    <li><a href="#">+555 5678 12340</a></li>
                    <li><a href="#">info@yourmail.com</a></li>
                    <li><a href="#">info@yourmail.com</a></li>
                    
                </ul>
             </div>
        </div>
    </div>
</footer>
<div class="bottofooter">
    <div class="container">
        <div class="row">
            <div class="col-md-6">Copyright © 2023 CipherSol. All Rights Reserved</div>
            <div class="col-md-6 text-end"><a href="#">Terms of service </a>  |  <a href="#"> Privacy policy</a>  |  <a href="#"> Login & Register</a></div>
        </div>
    </div>
</div>


  <!--  JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('frontend/auth/js/bootstrap.bundle.min.js') }}"></script>
 
</body>
</html>