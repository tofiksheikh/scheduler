<html>
  <head>
  	<title>scheduler</title>
  </head>
  <body>
  	@include('user.layout.header')

  		@yield('content')

  	@include('user.layout.footer')

  	@stack('js')
  </body>
</html>
