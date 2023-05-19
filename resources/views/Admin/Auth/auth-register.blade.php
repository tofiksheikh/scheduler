<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>Appointy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
       
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Free Register</h5>
                                            <p>Get your free Skote account now.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                     <input type="hidden" value="{{url('/')}}" id="base_url">
                                     <form method="post" id="signup">
                     @csrf

                                             <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="full_name" class="form-control txtName" id="username" placeholder="Enter username" required>
                                            <div class="invalid-feedback">
                                                Please Enter Username
                                            </div>
                                             <label class="error txtName_error invalid-feedback" style="color: Red; display: none">Alphabetic characters only</label>
  
                                        </div>
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter email" required>  
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div>      
                                        </div>
                
                                       
                
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>       
                                        </div>
                                          <input type="hidden" name="user_type" value="admin">
                                        <div class="mt-4 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3">Sign up using</h5>
            
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                <p>Already have an account ? <a href="auth-login.html" class="fw-medium text-primary"> Login</a> </p>
                                <p>© <script>document.write(new Date().getFullYear())</script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Softport</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- validation init -->
        <script src="assets/js/pages/validation.init.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>


<script type="text/javascript">
    var specialKeys = new Array();
specialKeys.push(8); //Backspace
$(function () {
  
    $(".txtName").keypress(function (e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[a-zA-Z ]*$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        $(".txtName_error").css("display", isValid ? "none" : "inline");
        return isValid;
    });

  
});

jQuery.validator.addMethod("emailExt", function (value, element, param) {
    return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,}$/);
}, 'Please enter a valid email address');

$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than 2 mb');


</script>


<script>
   // toastr.options = {
   //    "closeButton": false,
   //    "debug": false,
   //    "newestOnTop": false,
   //    "progressBar": false,
   //    "positionClass": "toast-bottom-left",
   //    "preventDuplicates": true,
   //    "onclick": null,
   //    "showDuration": "300",
   //    "hideDuration": "500",
   //    "timeOut": "5000",
   //    "extendedTimeOut": "1000",
   //    "showEasing": "swing",
   //    "hideEasing": "linear",
   //    "showMethod": "fadeIn",
   //    "hideMethod": "fadeOut"
   // }
   // $(".chb").change(function() {
   //    $(".chb").prop('checked', false);
   //    $(this).prop('checked', true);
   // });
    
 
   // login
   // test for form submition
   $("#signup").submit(function(e) {
   // alert("iqrar");
      e.preventDefault(); // avoid to execute the actual submit of  
      loginvalidate();
   });
// test for form submition
 
   function loginvalidate() {
let baseUrl = $('#base_url').val();
//alert(baseUrl);
      var dataArr = {};
      var err = 0;
      $('.l_validate').each(function(e) {
         if ($(this).hasClass('l_required')) {
            if ($.trim($(this).val()) == '') {
              // toastr.error($(this).attr('err-text'));
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
              // toastr.error('Email should be correct.');
               $(this).focus();
               err++;
               return false;
            }
         }
          
      });
      if (err == 0) {
         $(".loading").show();
         $.ajax({
            url:  `${baseUrl}/createAccount`,
            method: "POST",
            data: $('#signup').serialize(),
            // got response from Api                    
            success: function(data) {

               $('#response').show();
               // success & error handling
               if (data.status == "success") {
                  //toastr.success(data.message);
             $(".loading").hide();  
             window.location.replace('{{url('signin')}}');

               } else {
                $(".loading").hide();
                 // toastr.error(data.message);
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
