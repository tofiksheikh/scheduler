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
          <a class="nav-link btn btn-primary" href="#" >Sign In</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section id="login">

     <div class="loading" style="display: none;">
    <div class="loader"></div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 ms-auto">
                <div class="text-left"><h2>Sign in to Appointy Center</h2>
                <hr>
                <p>By continuing, you agree to our Terms of Use and Privacy Policy.</p></div>
                <form class="mt-4" method="post" id="signin">
                     @csrf
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control l_validate l_required l_chkEmail" err-text="Pleas Enter Email"  id="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password"  class="form-control l_validate l_required check-password" id="pwd"  err-text="Pleas Enter password" placeholder="Password">
                    </div>
                    <input type="hidden" name="user_type" value="user">
                    <div class="d-flex justify-content-between">
                        <div class="rememberMe d-flex align-items-center"><input type="checkbox" class="me-2"> Remember me</div>
                        <a href="#" class="text-white ">Forgot Password &nbsp; ?</a>
                    </div>
                    <button class="btn bg-white loginBtn mt-4">Login</button>
                    <div class="or text-center mt-3 mb-3">OR</div>
                    <div class="d-flex justify-content-between social_btn">
                        <a href="#" class="btn bg-white"><img src="{{ asset('frontend/auth/images/google.png') }}"> Continue with Google</a>
                        <a href="#" class="btn bg-white"><img src="{{ asset('frontend/auth/images/facebook.png') }}"> Continue with facebook</a>
                    </div>
                    <p class="text-center mt-3">Don’t have an account? <a href="{{url('signup')}}" class="text-white">Sign up</a></p>
                </form>
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
         $(".loading").show();
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
             $(".loading").hide();  
             window.location.replace("{{url('')}}"+data.redirect_uri);
               } else {
                $(".loading").hide();
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