<footer>
         <div class="container">
            <div class="footer-inner">
               <div class="row">
                  <div class="col">
                    <a href="#" class="footer-logo"><img src="{{asset('frontend/assets/images/logo.png')}}"></a>
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
      <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
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
     
   </body>
</html>