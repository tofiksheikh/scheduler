@php
$uri = Request::segment(1)
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Experts Platform - A Learning Institute</title>

   <!-- website icon -->
   <!-- <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon"> -->

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css.map') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css.map') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
   <!-- slick slider styles -->
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">

   <!-- Your custom styles -->
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
 

</head>


<body>
    <!-- ================  Header start here ================= -->
    <div class="full-width-header">
      <header class="rs-header" id="rs-header">
         <div class="menu-area menu-sticky">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <nav class="navbar navbar-expand-md">
                        <!-- Brand -->
                        <a class="navbar-brand" href="{{ url('/')}}">
                           <img src="{{ asset('frontend/assets/img/logo_main.svg') }}" alt="Experts Platform - A Learning Institute">
                        </a>
                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                           data-target="#collapsibleNavbar">
                           <span class="toggler-icon"></span>
                           <span class="toggler-icon"></span>
                           <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                           <ul class="navbar-nav first_nav">
                              <li class="nav-item">
                                 <a class="nav-link" href="javascript:;">Find Tutors</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('tutor/signin')}}">Become a tutor</a>
                              </li>
                           </ul>
                           <ul class="navbar-nav justify-content-end last_nav">
                              <li class="nav-item">
                                 <a class="nav-link contact_link"  href="{{ url('student/signin')}}">Login</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
   </div>

   <!-- ================= Header end here =================== -->

   <!-- =============== login section start here =============== -->
   <section class="login_signup_section">
      <div class="container-fluid">
      <div class="loader" style="display: none;"></div>
         <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9">
               <h2>Welcome Back ({{Request::segment(1)}})</h2>
               <p class="ls_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
               <form method="post" id="signin">
                     @csrf
                     <input type="hidden" value="{{Request::segment(1);}}" name="user_type">
                  <div class="form-group">
                     <label for="email">Email Id</label>
                     <input type="text" name="email" class="form-control l_validate l_required l_chkEmail" value="admin@gmail.com"  err-text="Pleas Enter Email"  id="email"  placeholder="Enter Email ID">
                     <i class="fa-regular fa-envelope common_icon"></i>
                     <i class="fa-sharp fa-regular fa-circle-check"></i>
                  </div>
                  <div class="form-group">
                     <label for="pwd">Password</label>
                     <input type="password" name="password" value="123456" class="form-control l_validate l_required check-password"  id="pwd"  err-text="Pleas Enter password"  placeholder="************">
                     <i class="fa-solid fa-lock common_icon"></i>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-xs-6">
                        <label class="custom_checkbox">Remember Me
                           <input type="checkbox" checked="checked">
                           <span class="checkmark"></span>
                        </label>
                     </div>
                     <div class="col-md-6 col-xs-6 text-right">
                        <a href="#" class="forgot_link">Forgot Password?</a>
                     </div>
                  </div>
                  <div class="btn_group">
                     <button type="submit" class="btn common_btn_link">Login</button>
                     <a href="{{ url($uri)}}/signup" class="btn create_account_btn">Create Account</a>
                  </div>

                  <div class="social_link_wrap">
                     <p>Or you can join with</p>
                     <div class="links_group">
                        <a href="javascript:;" class="btn google_link_btn"><i class="fa-brands fa-google"></i> Continue with Google</a>
                        <a href="javascript:;" class="btn facebook_link_btn"><i class="fa-brands fa-facebook"></i> Continue with Facebook</a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- =============== login section end here ================= -->

   <!-- =================== Footer ========================  -->
   <footer class="footer">
      <div class="footer_inner_wrapper">
         <div class="container-fluid">
            <div class="row">
               <!-- column-1 -->
               <div class="col-lg-6 col-md-6">
                  <div class="footer-logos-wrapper">
                     <div class="ft_logo">
                        <a href="index.html">
                           <img src="{{ asset('frontend/assets/img/logo_white.svg') }}" alt="Experts Platform - A Learning Institute">
                        </a>
                     </div>
                     <p>Collaboratively administrate empowered markets via plug-and-play <br> networks. Dynamically
                        procrastinate B2C users after installed base <br> benefits. Dramatically visualize customer
                        directed convergence.</p>
                  </div>
               </div>
               <!-- column-2 -->
               <div class="col-lg-3 col-md-3 col-xs-6">
                  <div class="footer-links-wrapper">
                     <h6>Site Map</h6>
                     <ul class="list-unstyled">
                        <li>
                           <a href="javascript:;">About Us</a>
                        </li>
                        <li>
                           <a href="javascript:;">Find Tutors</a>
                        </li>
                        <li>
                           <a href="javascript:;">Become a tutor</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- column-3 -->
               <div class="col-lg-3 col-md-3 col-xs-6">
                  <div class="footer-links-wrapper">
                     <h6>Get In Touch</h6>
                     <ul class="list-unstyled">
                        <li>
                           <a href="tel:+555567812340">+555 5678 12340</a>
                        </li>
                        <li>
                           <a href="mailto:info@yourmail.com">info@yourmail.com</a>
                        </li>
                        <li>
                           <a href="javascript:;">Become a tutor</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- column-3 end -->
            </div>

         </div>

      </div>
      <div class="copyright-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <p>Copyright © 2023 Expert Platform. All Rights Reserved</p>
               </div>
               <div class="col-lg-6">
                  <ul class="nav justify-content-end">
                     <li>
                        <a href="javascript:;">Terms of service</a>
                     </li>
                     <li>
                        <a href="javascript:;">Privacy policy</a>
                     </li>
                     <li>
                        <a href="javascript:;">Login & Register</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>

   </footer>
   <!-- ======================= Footer ======================= -->
   <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>

   <!-- jQuery -->
    <!-- Bootstrap tooltips -->
   <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
   <!-- Bootstrap core JavaScript -->
   <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
   <!-- slick slider javascript -->
   <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

   <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>


<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

   
<script>
   toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-bottom-left",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "500",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
   }
   $(".chb").change(function() {
      $(".chb").prop('checked', false);
      $(this).prop('checked', true);
   });
    
 
   // login
   // test for form submition
   $("#signin").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of  
      loginvalidate();
   });

   function loginvalidate() {

      var dataArr = {};
      var err = 0;
      $('.l_validate').each(function(e) {
         if ($(this).hasClass('l_required')) {
            if ($.trim($(this).val()) == '') {
               toastr.error($(this).attr('err-text'));
               $(this).focus();
               $(this).addClass("errorhover").css("border-color", "red")
               err++;
               return false;
            } else {
               $(this).addClass("errorhover").css("border-color", "gray");
            }
         }
         if ($(this).hasClass('l_chkEmail')) {
            var emRegex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
            if (!emRegex.test($.trim($(this).val()))) {
               toastr.error('Email should be correct.');
               $(this).focus();
               err++;
               return false;
            }
         }
     });
      if (err == 0) {
         $(".loader").show();
         $.ajax({
            url: "{{url('tutor/verifyAccount')}}",
            method: "POST",
            data: $('#signin').serialize(),
            // got response from Api                    
            success: function(data) {

               $('#response').show();
               // success & error handling
               if (data.status == "success") {
                  toastr.success(data.message);
             $(".loader").hide();  
             window.location.replace("{{url('')}}/"+data.redirect_uri);
               } else {
                $(".loader").hide();
                  toastr.error(data.message);
                //   location.reload();
               }
            }
         });
         // ajax request end
      }
   }
</script>

</body>

</html>