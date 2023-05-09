jQuery(document).ready(function() {
   // login
   // test for form submition
   $("#first_step").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of  
    loginvalidate();
 });

 function loginvalidate() {

    var dataArr = {};
    var err  = 0;
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
          url: "saveAbout",
          method: "POST",
          data: $('#first_step').serialize(),
          // got response from Api                    
          success: function(data) {

             $('#response').show();
             // success & error handling
             if (data.status == "success") {
                toastr.success(data.message);
                $('#movetoSecond').trigger('click');

           $(".loader").hide();  

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

// third step 

$("#third_step").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of  
    thirStepValidate();
 });

 function thirStepValidate() {

    var dataArr = {};
    var err  = 0;
    $('.t_validate').each(function(e) {
       
       if ($(this).hasClass('t_required')) {
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

   });
    if (err == 0) {
       
      
      $(".loader").show();
       $.ajax({
          url: "saveCertificate",
          method: "POST",
          data: $('#third_step').serialize(),
          // got response from Api                    
          success: function(data) {

             $('#response').show();
             // success & error handling
             if (data.status == "success") {
                toastr.success(data.message);
                $('#movetoFourth').trigger('click');

           $(".loader").hide();  

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
// fourth step


$("#fourth_step").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of  
    fourthStepValidate();
 });

 function fourthStepValidate() {

    var dataArr = {};
    var err  = 0;
    $('.f_validate').each(function(e) {
       
       if ($(this).hasClass('f_required')) {
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

   });
    if (err == 0) {
       
      
      $(".loader").show();
       $.ajax({
          url: "saveEducation",
          method: "POST",
          data: $('#fourth_step').serialize(),
          // got response from Api                    
          success: function(data) {

             $('#response').show();
             // success & error handling
             if (data.status == "success") {
                toastr.success(data.message);
                $('#movetoFifth').trigger('click');

           $(".loader").hide();  

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

//    fifth step 


$("#fifth_step").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of  
    fifthStepValidate();
 });

 function fifthStepValidate() {

    var dataArr = {};
    var err  = 0;
    $('.ft_validate').each(function(e) {
  
       if ($(this).hasClass('ft_required')) {
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

   });
    if (err == 0) {
       
      
      $(".loader").show();
       $.ajax({
          url: "profileDescription",
          method: "POST",
          data: $('#fifth_step').serialize(),
          // got response from Api                    
          success: function(data) {

             $('#response').show();
             // success & error handling
             if (data.status == "success") {
                toastr.success(data.message);
                $('#movetoSixth').trigger('click');

           $(".loader").hide();  

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


 
$("#sixth_step").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of  
    seixthStepValidate();
 });

 function seixthStepValidate() {

    var dataArr = {};
    var err  = 0;
    $('.st_validate').each(function(e) {
  
       if ($(this).hasClass('st_required')) {
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

   });
    if (err == 0) {
       
      
      $(".loader").show();
       $.ajax({
          url: "videioUpdate",
          method: "POST",
          data: $('#sixth_step').serialize(),
          // got response from Api                    
          success: function(data) {

             $('#response').show();
             // success & error handling
             if (data.status == "success") {
                toastr.success(data.message);
                $('#movetoSeventh').trigger('click');

           $(".loader").hide();  

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
//    seventh step


$("#seventh_step").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of  
    seventhStepValidate();
 });

 function seventhStepValidate() {

    var dataArr = {};
    var err  = 0;
    $('.ot_validate').each(function(e) {
  
       if ($(this).hasClass('ot_validate')) {
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

   });
    if (err == 0) {
       
      
      $(".loader").show();
       $.ajax({
          url: "tutorTimeSchedule",
          method: "POST",
          data: $('#seventh_step').serialize(),
          // got response from Api                    
          success: function(data) {

             $('#response').show();
             // success & error handling
             if (data.status == "success") {
                toastr.success(data.message);
                $('#movetoEight').trigger('click');

           $(".loader").hide();  

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
//    eight step

$("#eight_step").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of  
    eightStepValidate();
 });

 function eightStepValidate() {

    var dataArr = {};
    var err  = 0;
    $('.et_validate').each(function(e) {
  
       if ($(this).hasClass('et_required')) {
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

   });
    if (err == 0) {
       
      
      $(".loader").show();
       $.ajax({
          url: "updatePricePerHour",
          method: "POST",
          data: $('#eight_step').serialize(),
          // got response from Api                    
          success: function(data) {

             $('#response').show();
             // success & error handling
             if (data.status == "success") {
                toastr.success(data.message);
                $('#movetoNine').trigger('click');

           $(".loader").hide();  

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
})