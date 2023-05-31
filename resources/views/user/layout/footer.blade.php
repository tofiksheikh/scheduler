
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#"><img src="{{asset('frontend/assets/images/footer-logo.png')}}"></a>
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
      <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/assets/js/bootstrap-select.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/assets/js/moment.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/assets/js/daterangepicker.min.js')}}"></script>
       <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script src="{{ asset('frontend/assets/js/jquery.validate.min.js')}}"></script>
      <script type="text/javascript">
         $(document).ready(function () {
  $("input[name='datetimes']").daterangepicker(
    {},
    function (start, end, label) {
      let startDate = start.format("YYYY-MM-DD").toString();
      let endDate = end.format("YYYY-MM-DD").toString();

      document.getElementById("startDate").innerHTML =
        "Start date: " + startDate;
      document.getElementById("endDate").innerHTML = "End date: " + endDate;
      
    }
  );
});

      </script>
      <script type="text/javascript">
          $(".weekappend").click(function () {
               $(this).closest("tr").find(".weekappendCont").append('<div class="weekRow"><div class="d-flex align-items-center"><input type="Time" class="form-control"><span class="me-2 ms-2"> - </span> <input type="Time" class="form-control"><button class="btn removeBtn"><i class="fas fa-trash"></i></button></div></div>');
            });
          $('body').on('click', '.removeBtn', function () {
               $(this).closest('.weekRow').remove();
            });
      </script>
      <script type="text/javascript">

          
$("input[name='daterange']").click(function () {
    $("#datetimes").css('display', ($(this).val() === 'b') ? 'block':'none');
});



if($("input[name='mainWeek']").is(":checked")) {
        $(".CheckCont").show();
         $(".unCheckCont").hide();
    } else {
         $(".unCheckCont").show();
         $(".CheckCont").hide();
    }

$("input[name='mainWeek']").click(function() {
    if($(this).is(":checked")) {
         $(this).closest("tr").find(".CheckCont").show();
         $(this).closest("tr").find(".unCheckCont").hide();
    } else {
         $(this).closest("tr").find(".unCheckCont").show();
         $(this).closest("tr").find(".CheckCont").hide();
    }
});

      </script>
   </body>
</html>









      