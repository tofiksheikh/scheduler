<!DOCTYPE html>
<html lang="en">
<head>


   <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link href="{{ asset('frontend/assets/images/favicon.png') }}" rel="icon">
      <!--  CSS Files -->
      <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/daterangepicker.css') }}">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
      <!-- Template Main CSS File -->
      <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" />
       <title>Appointy</title>

</head>
   <body>
        <input type="hidden" value="{{url('/')}}" id="base_url">

      <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{ asset('frontend/assets/images/logo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Solutions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Resources</a>
        </li>
       
        @if(Auth::guard('user')->check())
        <li class="nav-item">
          <a class="nav-link"href="{{url('profile')}}" tabindex="-1" style="margin-right: 5px;">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary" href="{{url('logout')}}">Log Out</a>
        </li>
        @else
         <li class="nav-item">
          <a class="nav-link btn btn-primary" href="{{url('signin')}}" tabindex="-1">Sign In</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>