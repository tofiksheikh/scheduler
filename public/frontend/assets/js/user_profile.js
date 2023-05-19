
let baseUrl = $('#base_url').val();
$(function () {

$("form[name='profileTabInfoForm']").validate({
        // Define validation rules
        rules: {
            full_name: "required",
            language: "required",
            date_format: "required",
            time_format: "required",
            country: "required",
            time_zone: "required",

            profile_image: {
                filesize: 5 * 1024 * 1024,
            },
            full_name: {
                required: true
            },
            language: {
                required: true
            },
            date_format: {
                required: true
            },
            time_format: {
                required: true
            },
            country: {
                required: true
            },
            time_zone: {
                required: true
            }
        },
        // Specify validation error messages
        messages: {

            full_name: {
                required: "Please enter your Full Name",
            },
            language: {
                required: "Please Select your Language"

            },
            date_format: {
                required: "Please Select Your Date Format"
            },
             time_format: {
                required: "Please Select Your Time Format"
            },
             country: {
                required: "Please Select Your Country"
            },
            time_zone: {
                required: "Please Select Time Zone."
            }
        },
        submitHandler: function (form) {
            let data = new FormData($("#profileTabInfoForm")[0]);
  $(".loading").show();
            $.ajax({
                url: `${baseUrl}/save-profile-information`,
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.status == "success") {
                        toastr.success(data.message);
                        location.reload(true);
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
$("form[name='brandingTabInfoForm']").validate({
        // Define validation rules
        rules: {
           
            logo_image: {
                filesize: 5 * 1024 * 1024,
            }
        },
        // Specify validation error messages
        messages: {

            
        },
        submitHandler: function (form) {
            let data = new FormData($("#brandingTabInfoForm")[0]);

            $.ajax({
                url: `${baseUrl}/save-branding-information`,
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.status == "success") {
                        toastr.success(data.message);
                        location.reload(true);
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
    $("form[name='phoneInfoForm']").validate({
        // Define validation rules
        rules: {
            phone_no: "required",

           
            phone_no: {
                required: true,
                minlength: 10,
                maxlength: 10,
                number: true
            }
        },
        // Specify validation error messages
        messages: {

            phone: {
                required: "Please provide a phone number",
                number: "Invalid phone number",
                minlength: "Phone number must be min 10 characters long",
                maxlength: "Phone number must not be more than 10 characters long"

            }
        },
        submitHandler: function (form) {
            let data = new FormData($("#phoneInfoForm")[0]);
  $(".loading").show();
            $.ajax({
                url: `${baseUrl}/save-phone-number`,
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

$("form[name='myLinkTabInfoForm']").validate({
        // Define validation rules
        rules: {
            link: "required",

            link: {
                  required: true
            }
        },
        // Specify validation error messages
        messages: {
        link: { required: "Please Enter URL Link" }
            
        },
        submitHandler: function (form) {
            let data = new FormData($("#myLinkTabInfoForm")[0]);
  $(".loading").show();
            $.ajax({
                url: `${baseUrl}/save-my-link-information`,
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

    $("form[name='changePasswordForm']").validate({
        // Define validation rules
        rules: {
            current_password: "required",
            new_password: "required",
            conf_password: "required",

            current_password: {
                required: true
            },
            new_password: {
                required: true,
                minlength: 8,
            },
            conf_password: {
                required: true,
                minlength: 8,
                equalTo: '#n_pwd'
            }
        },
        // Specify validation error messages
        messages: {

            current_password: {
                required: "The Current Password field is mandatory!"
            },
            new_password: {
                required: "The New Password field is mandatory!",
                minlength: "Please enter a New Password at least 8 characters!"
            },
            conf_password: {
                required: "The Confirm password field is mandatory!",
                minlength: "Please enter a Confirm password at least 8 characters!",
                equalTo: "The passwords do not match!"
            },
        },
        submitHandler: function (form) {
            let data = new FormData($("#changePasswordForm")[0]);
  $(".loading").show();
            $.ajax({
                url: `${baseUrl}/change-password`,
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.status == "success") {
                        toastr.success(data.message);
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


var specialKeys = new Array();
specialKeys.push(8); //Backspace
$(function () {
    $(".numeric").bind("keypress", function (e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
        $(".numeric_error").css("display", ret ? "none" : "inline");
        return ret;
    });
    $(".numeric").bind("paste", function (e) {
        return false;
    });
    $(".numeric").bind("drop", function (e) {
        return false;
    });

    $(".txtName").keypress(function (e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[a-zA-Z ]*$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        $(".txtName_error").css("display", isValid ? "none" : "inline");
        return isValid;
    });

    $(".txtcity").keypress(function (e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[a-zA-Z ]*$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        $(".txtcity_error").css("display", isValid ? "none" : "inline");
        return isValid;
    });
    $(".txtstate").keypress(function (e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[a-zA-Z ]*$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        $(".txtstate_error").css("display", isValid ? "none" : "inline");
        return isValid;
    });
});

jQuery.validator.addMethod("emailExt", function (value, element, param) {
    return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,}$/);
}, 'Please enter a valid email address');

$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than 2 mb');



function imagePreview(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (event) {
            $('.std_pro_thumbnail').html('<img src="' + event.target.result + '" width="300" height="auto" lass="rounded-md"/>');
        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
}

$("#customFile").change(function () {
    $('.std_pro_thumbnail').html('');
    imagePreview(this);
});


function deleteAccount(student_id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you really want to delete these records?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
              $(".loading").show();
            $.ajax({
                url: `${baseUrl}/student/delete-account/${student_id}`,//"{{url('student/getWishList')}}",
                method: "get",
                data: {},
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.status == "success") {
                        toastr.success(data.message);
                        window.location.replace(`${baseUrl}/student/logout`);
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
    })
}

function logoImagePreview(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (event) {
            $('.LogoImg').html('<img src="' + event.target.result + '" width="300" height="auto" lass="rounded-md"/>');
        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
}

$("#logocustomFile").change(function () {
    $('.LogoImg').html('');
    logoImagePreview(this);
});

function deleteAccount(){
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you really want to delete these records?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
              $(".loading").show();
            $.ajax({
                url: `${baseUrl}/delete-account`,//"{{url('student/getWishList')}}",
                method: "get",
                data: {},
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.status == "success") {
                        toastr.success(data.message);
                        window.location.replace(`${baseUrl}/logout`);
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
    })
}