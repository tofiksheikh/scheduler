 @extends('admin.layout.layout')
 @section('content')

 <!-- ============================================================== -->
 <!-- Start right Content here -->
 <!-- ============================================================== -->
 <div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">User Edit</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                <li class="breadcrumb-item active">Users List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                         <div class="row">
                            <div class="col-lg-12">
        <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="full_name" value="{{$user->first_name}} {{$user->last_name}}" class="form-control txtName" id="username" placeholder="Enter username" required>
        <div class="invalid-feedback">
            Please Enter Username
        </div>
        <label class="error txtName_error invalid-feedback" style="color: Red; display: none">Alphabetic characters only</label>

    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Email</label>
        <input type="text" name="full_name" value="{{$user->email}}" class="form-control txtName" id="username" placeholder="Enter username" required>
        <div class="invalid-feedback">
            Please Enter Username
        </div>
        <label class="error txtName_error invalid-feedback" style="color: Red; display: none">Alphabetic characters only</label>
        
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Phone</label>
        <input type="text" name="phone" value="{{$user->phone}}" class="form-control " id="phone" placeholder="Enter phone" required>
        <div class="invalid-feedback">
            Please Enter Phone
        </div>
       
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">city</label>
        <input type="text" name="full_name" value="{{$user->city}}" class="form-control txtName" id="username" placeholder="Enter City" required>
        <div class="invalid-feedback">
            Please Enter Username
        </div>
        <label class="error txtName_error invalid-feedback" style="color: Red; display: none">Alphabetic characters only</label>
        
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">state</label>
        <input type="text" name="full_name" value="{{$user->state}}" class="form-control txtName" id="username" placeholder="Enter State" required>
        <div class="invalid-feedback">
            Please Enter Username
        </div>
        <label class="error txtName_error invalid-feedback" style="color: Red; display: none">Alphabetic characters only</label>
        
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">country</label>
        <input type="text" name="full_name" value="{{$user->country}}" class="form-control txtName" id="username" placeholder="Enter Country" required>
        <div class="invalid-feedback">
            Please Enter Username
        </div>
        <label class="error txtName_error invalid-feedback" style="color: Red; display: none">Alphabetic characters only</label>
        
    </div>  
      <div class="mb-3">
        <label for="username" class="form-label">Zip Code</label>
        <input type="text" name="full_name" value="{{$user->zip_code}}" class="form-control txtName" id="username" placeholder="Enter Zip Code" required>
        <div class="invalid-feedback">
            Please Enter Username
        </div>
        <label class="error txtName_error invalid-feedback" style="color: Red; display: none">Alphabetic characters only</label>
        
    </div>

  <input type="hidden" name="user_type" value="user">
                                      <button class="btn btn-primary">Save Chanegs</button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->


<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Softport.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Softport
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->



@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script> 
  function deleteUser(user_id) {
           // alert(user_id);
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
            $.ajax({
                url: `${baseUrl}/admin/delete-user/${user_id}`,//"{{url('student/getWishList')}}",
                method: "delete",
                dataType: 'JSON',
                data:{},
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.status == "success") {
                        toastr.success(data.message);
                        setTimeout(function() {
                            location.reload(true);

                        }, 700);

                    } else {
                        toastr.error(data.message);
                    }
                },
                error: function (r) {
                    console.log('error', r);
                }
            });
        }
    })
}


</script> 
@endpush