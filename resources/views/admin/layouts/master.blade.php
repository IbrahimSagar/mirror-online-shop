<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>
   @yield('title','Admin Panel | Mirror') 
  </title>

  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css" />

  <link rel="stylesheet" href="{{asset('css/admin_style.css')}}" />
  <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}" />
  
</head>

<body>
  <div class=" container-scroller">
    @include('admin.partials.nav')

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        @include('admin.partials.left_sidebar')
        <!-- partial -->
        @yield('content')
                          
      </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Admin Pannel of Mirror Online Shop</a> &copy; 2019
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
  <!--Plugins:js-->
  <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/datat-table.min.js')}}" defer></script>
  <script>
    $(document).ready(function() {
    $('#dataTable').DataTable();
    } );
  </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
<!--inject::js->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script-->
<!--Custom Js fot this page->
  <script src="js/chart.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script-->
  <!--
  <script src="js/maps.js"></script>
  <!-inject::js--
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script-->




</body>

</html>
