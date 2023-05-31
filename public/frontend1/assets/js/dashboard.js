       
       let baseUrl = $('#base_url').val();
$(function () {

$("form[name='customHrInfoForm']").validate({
        // Define validation rules
        rules: {
        },
        // Specify validation error messages
        messages: {
        },
        submitHandler: function (form) {
            let data = new FormData($("#customHrInfoForm")[0]);
           
  $(".loading").show();
            $.ajax({
                url: `${baseUrl}/set-custom-hours`,
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.status == "success") {
                        toastr.success(data.message);
                        // location.reload(true);
                         $(".loading").hide();
                    } else {
                        toastr.error(data.message);
                         $(".loading").hide();
                    }
                },
                error: function (r) {
                    console.log('error', r);
                }
            });
        }
    });
});



        let sun= 1;
        let mon = 1;
        let tue= 1;
        let wed = 1;
        let thu= 1;
        let fri = 1;
        let sat = 1;
          $(".weekappendsun").click(function () {
            sun++;
            $('#sun_total').val(sun);
               $(this).closest("tr").find(".weekappendsunCont").append(`<div class="weekRow"><div class="d-flex align-items-center"><input type="Time" name="from_time_sun${sun}" class="form-control"><span class="me-2 ms-2"> - </span> <input type="Time" class="form-control" name="to_time_sun${sun}"><button class="btn removeBtn"><i class="fas fa-trash"></i></button></div></div>`);
            });
            $(".weekappendmon").click(function () {
            mon++;
             $('#mon_total').val(mon);
               $(this).closest("tr").find(".weekappendmonCont").append(`<div class="weekRow"><div class="d-flex align-items-center"><input type="Time" name="from_time_mon${mon}" class="form-control"><span class="me-2 ms-2"> - </span> <input type="Time" class="form-control" name="to_time_mon${mon}"><button class="btn removeBtn"><i class="fas fa-trash"></i></button></div></div>`);
            });

              $(".weekappendtue").click(function () {
            tue++;
             $('#tue_total').val(tue);
               $(this).closest("tr").find(".weekappendtueCont").append(`<div class="weekRow"><div class="d-flex align-items-center"><input type="Time" name="from_time_tue${tue}" class="form-control"><span class="me-2 ms-2"> - </span> <input type="Time" class="form-control" name="to_time_tue${tue}"><button class="btn removeBtn"><i class="fas fa-trash"></i></button></div></div>`);
            });

                $(".weekappendwed").click(function () {
            wed++;
             $('#wed_total').val(wed);
               $(this).closest("tr").find(".weekappendwedCont").append(`<div class="weekRow"><div class="d-flex align-items-center"><input type="Time" name="from_time_wed${wed}" class="form-control"><span class="me-2 ms-2"> - </span> <input type="Time" class="form-control" name="to_time_wed${wed}"><button class="btn removeBtn"><i class="fas fa-trash"></i></button></div></div>`);
            });

            $(".weekappendthu").click(function () {
            thu++;
             $('#thu_total').val(thu);
               $(this).closest("tr").find(".weekappendthuCont").append(`<div class="weekRow"><div class="d-flex align-items-center"><input type="Time" name="from_time_thu${thu}" class="form-control"><span class="me-2 ms-2"> - </span> <input type="Time" class="form-control" name="to_time_thu${thu}"><button class="btn removeBtn"><i class="fas fa-trash"></i></button></div></div>`);
            });

             $(".weekappendfri").click(function () {
            fri++;
             $('#fri_total').val(fri);
               $(this).closest("tr").find(".weekappendfriCont").append(`<div class="weekRow"><div class="d-flex align-items-center"><input type="Time" name="from_time_fri${fri}" class="form-control"><span class="me-2 ms-2"> - </span> <input type="Time" class="form-control" name="to_time_fri${fri}"><button class="btn removeBtn"><i class="fas fa-trash"></i></button></div></div>`);
            });

            $(".weekappendsat").click(function () {
            sat++;
             $('#sat_total').val(sat);
               $(this).closest("tr").find(".weekappendsatCont").append(`<div class="weekRow"><div class="d-flex align-items-center"><input type="Time" name="from_time_sat${sat}" class="form-control"><span class="me-2 ms-2"> - </span> <input type="Time" class="form-control" name="to_time_sat${sat}"><button class="btn removeBtn"><i class="fas fa-trash"></i></button></div></div>`);
            });
          $('body').on('click', '.removeBtn', function () {
               $(this).closest('.weekRow').remove();
            });
  