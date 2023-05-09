jQuery(document).ready(function() {
	// click on next button
	jQuery('.form-wizard-next-btn').click(function() {
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		var next = jQuery(this);
		var nextWizardStep = true;
		parentFieldset.find('.wizard-required').each(function(){
			var thisValue = jQuery(this).val();

			if( thisValue == "") {
				jQuery(this).siblings(".wizard-form-error").slideDown();
				nextWizardStep = false;
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
		if( nextWizardStep) {
			next.parents('.wizard-fieldset').removeClass("show","400");
			currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
			next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
			jQuery(document).find('.wizard-fieldset').each(function(){
				if(jQuery(this).hasClass('show')){
					var formAtrr = jQuery(this).attr('data-tab-content');
					jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
						if(jQuery(this).attr('data-attr') == formAtrr){
							jQuery(this).addClass('active');
							var innerWidth = jQuery(this).innerWidth();
							var position = jQuery(this).position();
							jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
						}else{
							jQuery(this).removeClass('active');
						}
					});
				}
			});
		}
	});
	//click on previous button
	jQuery('.form-wizard-previous-btn').click(function() {
		var counter = parseInt(jQuery(".wizard-counter").text());;
		var prev =jQuery(this);
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		prev.parents('.wizard-fieldset').removeClass("show","400");
		prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
		currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
		jQuery(document).find('.wizard-fieldset').each(function(){
			if(jQuery(this).hasClass('show')){
				var formAtrr = jQuery(this).attr('data-tab-content');
				jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
					if(jQuery(this).attr('data-attr') == formAtrr){
						jQuery(this).addClass('active');
						var innerWidth = jQuery(this).innerWidth();
						var position = jQuery(this).position();
						jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
					}else{
						jQuery(this).removeClass('active');
					}
				});
			}
		});
	});
	//click on form submit button
	jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		parentFieldset.find('.wizard-required').each(function() {
			var thisValue = jQuery(this).val();
			if( thisValue == "" ) {
				jQuery(this).siblings(".wizard-form-error").slideDown();
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
	});
	// focus on input field check empty or not
	jQuery(".form-control").on('focus', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().addClass("focus-input");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
		}
	}).on('blur', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().removeClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideDown("3000");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideUp("3000");
		}
	});
});

// for photo upload
function readUrl(input) {
  
    if (input.files && input.files[0]) {
      let reader = new FileReader();
      reader.onload = (e) => {
        let imgData = e.target.result;
        let imgName = input.files[0].name;
        input.setAttribute("data-title", imgName);
        console.log(e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  
  }


// for append data

$(function () {
    $(".add_row_btn").bind("click", function () {
        var div = $('<div class="row"></div>');
        div.html(GetDynamicTextBox(""));
        $("#lang_row").append(div);
    });
    $("body").on("click", ".remove_row_btn", function () {
        $(this).closest(".row").remove();
    });
});
function GetDynamicTextBox(value) {
    return '<div class="col-md-6"><div class="form-group"><label for="lang" class="txt_label">Languages spoken</label><select class="form-control" id="lang"><option value="">English</option><option value="">Arabic</option><option value="">English</option><option value="">Arabic</option><option value="">English</option><option value="">Arabic</option></select></div></div><div class="col-md-5"><div class="form-group"><label for="lang" class="txt_label">Level</label><select class="form-control" id="country_name"><option value="">Choose Level...</option><option value="">A1</option><option value="">A2</option><option value="">B1</option><option value="">B2</option><option value="">C1</option><option value="">C2</option><option value="">Native</option></select></div></div><div class="col-md-1"><div class="form-group"><a href="javascript:;" class="btn remove_row_btn"><i class="fa-sharp fa fa-trash"></i></a></div></div>'
}


// for append time monday

$(function () {
    $(".add_mon_time").bind("click", function () {
        var div = $('<div class="row"></div>');
        div.html(GetDynamicMonBox(""));
        $("#mon_time_row").append(div);
    });
    $("body").on("click", ".remove_mon_time", function () {
        $(this).closest(".row").remove();
    });
});
function GetDynamicMonBox(value) {
    return '<div class="col-md-5"><select class="form-control" id="mon_time_from"><option value="">9:00</option><option value="">9:30</option><option value="">10:00</option><option value="">10:30</option><option value="">11:00</option><option value="">11:30</option><option value="">12:00</option><option value="">12:30</option><option value="">01:00</option><option value="">01:30</option></select></div><div class="col-md-1"><p class="p_dash">to</p></div><div class="col-md-5"><select class="form-control" id="mon_time_to"><option value="">9:00</option><option value="">9:30</option><option value="">10:00</option><option value="">10:30</option><option value="">11:00</option><option value="">11:30</option><option value="">12:00</option><option value="">12:30</option><option value="">01:00</option><option value="">01:30</option></select></div><div class="col-md-1"><button type="button" class="btn remove_mon_time time_remove_btn">-</button></div>'
}