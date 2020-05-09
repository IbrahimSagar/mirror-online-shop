 @extends('layouts.master')

@section('content') 
  
    <div class="row" style="margin: 30px 0px">

    <div class="col-md-4">
      <h1 class="my-4">All Categories</h1>
      @include('partials.product-sidebar')
    </div>

    <div class="col-md-8">
      <div class="widget">
        <h3>All Product</h3>
        @include('pages.product.partials.all_products')
      </div> 
      <div class="widget"></div>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      $('#ex1').zoom();
      $(function() {
        var $tabButtonItem = $('#tab-button li'),
            $tabSelect = $('#tab-select'),
            $tabContents = $('.tab-contents'),
            activeClass = 'is-active';

            $tabButtonItem.first().addClass(activeClass);
            $tabContents.not(':first').hide();

            $tabButtonItem.find('a').on('click', function(e) {
              var target = $(this).attr('href');
              $tabButtonItem.removeClass(activeClass);
              $(this).parent().addClass(activeClass);
              $tabSelect.val(target);
              $tabContents.hide();
              $(target).show();
              e.preventDefault();
          });
      });
    });
  </script>
@endsection