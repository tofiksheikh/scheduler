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
                                    <h4 class="mb-sm-0 font-size-18">Users List</h4>

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
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap table-hover">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 70px;">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Phone No.</th>
                                                        <!-- <th scope="col">Projects</th> -->
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                               <tbody> 
                                                @php $no = 1; @endphp

                                                 @foreach($users as $user )
                                                 
                                                 <tr>
                                                        <td>
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle">
                                                                  {{$no}}
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">{{$user->first_name}} {{$user->last_name}}</h5>
                                                            
                                                        </td>
                                                        <td>{{$user->email}}</td>
                                                         <td>{{$user->phone}}</td>
                                                       <!--  <td>
                                                            125
                                                        </td>
 -->                                                        <td>
                                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                                <li class="list-inline-item px-2">
                                                                  <a class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" href="{{route('admin.edit-user',['id'=>$user->id])}}">

                                    <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit

                                </a>
                                                                </li>
                                                                <li class="list-inline-item px-2">
                                                                   <a class="btn btn-danger btn-sm btn-rounded waves-effect waves-light" onclick="deleteUser({{$user->id}})">

                                    <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Delete

                                </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
 @php $no++; @endphp
                                                 @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- <ul class="pagination pagination-rounded justify-content-center mt-4">
                                                    <li class="page-item disabled">
                                                        <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript: void(0);" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="javascript: void(0);" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript: void(0);" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript: void(0);" class="page-link">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript: void(0);" class="page-link">5</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                    </li>
                                                </ul> -->
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