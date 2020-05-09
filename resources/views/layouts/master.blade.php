<!DOCTYPE html>
<html>
<head>
	<!--
	<meta charset="utf-8">
	<meta name="viewport" content="width"> -->


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<title>
   @yield('title','Mirror Online Shop') 
  </title>
   <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Bootstrap core CSS 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
  
  <link href="{{ URL::asset('/css/shop-homepage.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
  -->
  @include('partials.styles')
  <!-- Bootstrap core JavaScript -->
  <script src="{{ URL::asset('/js/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/js/jquery/jquery.zoom.min.js') }}"></script>
	    
</head>


<body>
  	<!--Navigation-->
    <div class="wrapper">
  	
    	@include('partials.nav')
      @include('partials.massages')
    	@yield('content')
      @include('partials.footer')

    </div>
      @include('partials.scripts')
      @yield('scripts')

</body>
</html>