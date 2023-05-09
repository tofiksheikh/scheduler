<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link href="{{asset('frontend/assets/images/favicon.png')}}" rel="icon">
      <!--  CSS Files -->
      <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
      <!-- Template Main CSS File -->
      <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet" />
      <title>scheduler</title>
   </head>
   <body>
    <input type="hidden" value="{{url('/')}}" id="base_url">
      <nav class="navbar navbar-expand-lg ">
         <div class="container">
            <a href="index.html" class="logo"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt="" width="185" /></a>
            <ul class="menu">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Products</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Solutions</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Find the Right Job</h5>
                                    <p>Millions of jobs. Search by what matters to you and find the one that's right for you.</p>
                                    <a href="#" class="btn btn-border">Start Using scheduler</a>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <img src="{{ asset('frontend/assets/images/job.jpg') }}" width="240px">
                                </div>
                            </div>
                        </li>
                        
                      </ul>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Teams & Companies</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Pricing</a>
                </li>
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="#">Resources</a>
                     <ul class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Find the Right Job</h5>
                                    <p>Millions of jobs. Search by what matters to you and find the one that's right for you.</p>
                                    <a href="#" class="btn btn-border">Start Using scheduler</a>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <img src="{{ asset('frontend/assets/images/job.jpg') }}" width="240px">
                                </div>
                            </div>
                        </li>
                        
                      </ul>
                  </li>
               </ul>
            
            <div class="d-flex">

                                    @if(Auth::guard('user')->check())
                              <a class="btn btn-secondry" href="#" tabindex="-1">For Employers</a>
                              <a class="btn btn-primary" href="{{url('profile')}}" tabindex="-1" style="margin-right: 5px;">Profile</a>
                                    <a class="btn btn-danger" href="{{url('logout')}}">Log Out</a>
@else
   <a class="btn btn-secondry" href="#" tabindex="-1">For Employers</a>
               <a class="btn btn-primary" href="{{url('signin')}}" tabindex="-1">Sign In</a>
@endif

              
            </div>
         </div>
      </nav>