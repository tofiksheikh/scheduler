    @extends('user.layout.layout')

@section('content')
  <section id="appointy_outer">
    <div class="container">
        <div class="titleBar d-flex justify-content-between mb-4">
            <h2>Add {{ Request::segment(2) }} Event Type</h2>
             <a class="btn btn-primary" href="{{url('add-event')}}" tabindex="-1"><i class="fas fa-angle-left"></i> Back </a>
        </div>
                <div class="setting_panel text-end">
                    <div class="dropdown">
                      <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-cog"></i> Setting</button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Invitee language <br> <span class="text-mute"> English</span></a></li>
                          <li><hr class="dropdown-divider"></li>
                        <li>
                            <div class="form-check form-switch">
                          <label class="form-check-label" for="flexSwitchCheckDefault">Event Type On/Off</label>
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div></li>
                      </ul>
                    </div>
                </div>
              <div class="card eventCard">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <h4>What event is this?</h4>
                                <p>No location given</p>
                            </div>
                            <div class="col-md-5 text-end">
                                <a class="btn" href="#" tabindex="-1">Cancel</a>
                                   <a class="btn btn-primary" href="#" tabindex="-1">Next</a>
                            </div>
                        </div>
                    </div>
                    <form action="javascript:;" id="addEventForm" method="post" name="addEventForm">
                     @csrf
                    <div class="card-body">
                         <input type="hidden" name="event_type" value="{{ Request::segment(2) }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event name <i class="fas fa-info-circle"></i></label>
                                    <input type="text" class="form-control" name="event_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Location <i class="fas fa-info-circle"></i></label>
                                     <select name="country" id="country" class="selectpicker" data-live-search="true">
                                   @foreach($countries as $countrie )
                                    <option value="{{$countrie->id}}" >{{$countrie->name}}</option>
                                    @endforeach
                                   <!--  <option value="2" >UK</option>
                                    <option value="3" >USA</option>
                                    <option value="4" >Australia</option>
                                    <option value="5" >Africa</option>
                                    <option value="6" >Saudi Arabia</option> -->
                                 </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description/Instructions <i class="fas fa-info-circle"></i></label>
                                    <textarea name="description" id="description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event link <i class="fas fa-info-circle"></i>  <span>calendly.com/megha-verma818/</span></label>
                                    <input type="text" class="form-control" name="event_link">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event color * <i class="fas fa-info-circle"></i></label>
                                    <ul class="colorPicker">
                                        <li class="red" data-bs-toggle="tooltip" data-bs-placement="top" title="Red">
                                            <input type="radio" name="color" value="red"> <i class="fas fa-circle" ></i></li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="light pink" class="light_pink"><input type="radio" name="color" value="light pink"> <i class="fas fa-circle"></i></li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Magenta" class="Magenta"><input type="radio" name="color" value="magenta"> <i class="fas fa-circle"></i></li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="voilet" class="voilet"><input type="radio" name="color" value="voilet"> <i class="fas fa-circle"></i></li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="blue" class="blue"><input type="radio" name="color" value="blue"> <i class="fas fa-circle"></i></li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="cyan" class="cyan"><input type="radio" name="color" value="cyan"> <i class="fas fa-circle"></i></li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="lime Green" class="lime_Green"><input type="radio" name="color" value="lime Green"> <i class="fas fa-circle"></i></li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="yellow" class="yellow"><input type="radio" name="color" value="yellow"> <i class="fas fa-circle"></i></li>
                                         <li data-bs-toggle="tooltip" data-bs-placement="top" title="orange" class="orange"><input type="radio" name="color" value="orange"> <i class="fas fa-circle"></i></li>
                                    </ul>
                                </div>
                            </div>
                            </div>

                        </div>
                        <hr>
                        <div class="eventBoxAction text-end">
                            <a class="btn" href="#" tabindex="-1">Cancel</a>
                                   <!-- <a class="btn btn-primary" href="#" tabindex="-1">Next</a> -->
                                    <button class="btn btn-primary">Save</button>
                        </div>
                         </form>
                    </div>
              </div>
          </div>
      </section>

@endsection

       @push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
      <script type="text/javascript" src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
      <script type="text/javascript">
          CKEDITOR.replace( 'description' );
CKEDITOR.on( 'instanceReady', function( evt )
  {
    var editor = evt.editor;
   
   editor.on('change', function (e) { 
    var contentSpace = editor.ui.space('contents');
    var ckeditorFrameCollection = contentSpace.$.getElementsByTagName('iframe');
    var ckeditorFrame = ckeditorFrameCollection[0];
    var innerDoc = ckeditorFrame.contentDocument;
    var innerDocTextAreaHeight = $(innerDoc.body).height();
    });
 });

      </script>
      <script>
          var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});








let baseUrl = $('#base_url').val();
$(function () {

$("form[name='addEventForm']").validate({
        // Define validation rules
    ignore: [],
              debug: false,
        rules: {
            event_name: "required",
             country: "required",
            //description: "required",
            event_link: "required",
           // color: "required",
           

            
            event_name: {
                required: true
            },
            country: {
                required: true
            },
           // description:{
           //      ckeditor_required:true
           //  },
            event_link: {
                required: true
            },
            // color: {
            //     required: true
            // }
        },
        // Specify validation error messages
        messages: {

            event_name: {
                required: "Please Enter Your Event Name",
            },
             country: {
                required: "Please Select Your Location"
            },
            // description: {
            //     required: "Please Enter Your Event Description"
            // },
            event_link: {
                required: "Please Enter Your Event Link"
            },
            // color: {
            //     required: "Please Select Your Color"
            // }

        },
        submitHandler: function (form) {
            let data = new FormData($("#addEventForm")[0]);
  $(".loading").show();
  console.log(data);
            $.ajax({
                url: `${baseUrl}/save-event-form`,
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

      </script>
@endpush