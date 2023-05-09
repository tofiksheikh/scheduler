<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link href="{{ asset('frontend/assets/images/favicon.png') }}" rel="icon">
      <!--  CSS Files -->
      <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
      <!-- Template Main CSS File -->
      <link href="{{ asset('frontend/assets/css/style.css') }}"  rel="stylesheet" />
      <title>scheduler</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg ">
         <div class="container">
            <a href="index.html" class="logo"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt="" width="185" /></a>
            <ul class="menu">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Products</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Solutions</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Find the Right Job</h5>
                                    <p>Millions of jobs. Search by what matters to you and find the one that's right for you.</p>
                                    <a href="#" class="btn btn-border">Start Using scheduler</a>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <img src="{{ asset('frontend/assets/images/job.jpg') }}" width="240px">
                                </div>
                            </div>
                        </li>
                        
                      </ul>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Teams & Companies</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Pricing</a>
                </li>
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="#">Resources</a>
                     <ul class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Find the Right Job</h5>
                                    <p>Millions of jobs. Search by what matters to you and find the one that's right for you.</p>
                                    <a href="#" class="btn btn-border">Start Using scheduler</a>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <img src="{{ asset('frontend/assets/images/job.jpg') }}" width="240px">
                                </div>
                            </div>
                        </li>
                        
                      </ul>
                  </li>
               </ul>
            
            <div class="d-flex">
               <a class="btn btn-secondry" href="#" tabindex="-1">For Employers</a>
               <a class="btn btn-primary" href="#" tabindex="-1">Sign In</a>
            </div>
         </div>
      </nav>
      <div class="signin_form login text-center">
        <div class="container">
           
           <form  method="post" id="signin">

            <h3>Sign in to Scheduler Center</h3>
           <h5>By continuing, you agree to our Terms of Use and Privacy Policy.</h5>
                     @csrf
               <div class="form-group">
                   <input type="text" name="email" class="form-control l_validate l_required l_chkEmail" err-text="Pleas Enter Email"  id="email" placeholder="Email Address"><i class="far fa-envelope"></i>
               </div>
               <div class="form-group">
                   <input type="password" name="password"  class="form-control l_validate l_required check-password" id="pwd"  err-text="Pleas Enter password" placeholder="Password"><i class="fas fa-lock"></i>
               </div>
               <div class="form-group"><button type="submit" class="btn btn-primary">Login</button></div>
               <div class="form-group"><a href="#" class="forgot-link">Forgot Password</a></div>
               <div class="diviver"><span>OR</span></div>

               <div class="form-group social-login">
                   <a href="#" class="btn facebook"><img src="{{ asset('frontend/assets/images/facebook.png') }}"> Continue With Facebook</a>
               </div>
               <div class="form-group social-login">
                   <a href="#" class="btn google"><img src="{{ asset('frontend/assets/images/google.png') }}"> Continue With Google</a>
               </div>
            
               <div class="form-group">
                   <p>Are You Hiring? <a href="#">Post Jobs</a></p>
               </div>
           </form>
        </div>
      </div>
     
      <footer>
         <div class="container">
            <div class="footer-inner">
               <div class="row">
                  <div class="col">
                    <a href="#" class="footer-logo"><img src="{{ asset('frontend/assets/images/logo.png') }}"></a>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>India</option>
                      <option value="1">Argentina</option>
                      <option value="2">Australia</option>
                      <option value="3">België (Nederlands)</option>
                    </select>
                  </div>
                  <div class="col">
                     <h4>Community</h4>
                    <ul class="">
                        <li><a href="#" target="_blank">Help / Contact Us</a></li>
                        <li><a href="#" target="_blank">Guidelines</a></li>
                        <li><a href="#" target="_top">Terms of Use</a></li>
                        <li><a href="#" target="_top">Privacy &amp; Cookies (New)</a></li>
                        <li><a href="#" target="_top">Privacy Center</a></li>
                        <li><a href="#">Do Not Sell My Personal Information</a></li>
                        <li><a href="#">Cookie Consent Tool</a></li>
                    </ul>
                     
                  </div>
                  <div class="col ">
                     <h4>Employers</h4>
                     <ul>
                        <li><a href="#">Get a FREE Employer </a></li>
                        <li><a href="#">Account </a></li>
                        <li><a href="#">Employer Centre</a></li>
                        <li><a href="#">Post a Job </a></li>
                     </ul>
                  </div>
                  <div class="col ">
                     <h4>scheduler</h4>
                     <ul>
                        <li><a href="#">About / Press </a></li>
                        <li><a href="#">Blog </a></li>
                        <li><a href="#">Grievance Officer - India</a></li>
                     </ul>
                  </div>
                   <div class="col ">
                     <h4>Work With Us</h4>
                     <ul>
                        <li><a href="#">Advertisers</a></li>
                        <li><a href="#">Developers </a></li>
                        <li><a href="#">Careers</a></li>
                     </ul>
                  </div>
               </div>
           </div>
       </div>
   </footer>
   <div class="footer_bottom">
    <div class="container">
           <div class="footer-bottom text-center">
              <p>Copyright © 2008-2022, scheduler, Inc. "scheduler" and logo are registered trademarks of scheduler, Inc</p>
           </div>
        </div>
    </div>
        
      <!--  JS Files -->
       <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
      <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

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
            url: "{{url('verifyAccount')}}",
            method: "POST",
            data: $('#signin').serialize(),
            // got response from Api                    
            success: function(data) {

               $('#response').show();
               // success & error handling
               if (data.status == "success") {
                  toastr.success(data.message);
             $(".loader").hide();  
             window.location.replace("{{url('')}}"+data.redirect_uri);
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