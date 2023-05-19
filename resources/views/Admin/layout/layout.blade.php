<html>
  <head>
  	<title>scheduler</title>
  </head>
  <body>
  	@include('Admin.layout.header')
    @include('Admin.layout.sidebar')
  		@yield('content')

  	@include('Admin.layout.footer')

  	@stack('js')
  </body>
</html>
