@extends('layouts.master')	
 
@section('content')
<section id="slider"><!-- start sidebar + content -->
<div class="our-slider">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
         <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{ asset('images/sliders/book.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('images/sliders/lar.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('images/sliders/sket.jpg') }}" alt="Third slide">
            </div>
          </div>
          <div class="carousel-caption d-none d-md-block margin-top-20">
              <h5>Fast And secure Online shop</h5>
                <a href="#" target="_blank" class="btn btn-success">Join Our Facebook Group</a>      
          </div>
          
            
         <!-- @foreach ($sliders as $slider)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index == 0 ? 'active' : '' }}" class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
          @endforeach
        </ol>
        <div class="carousel-inner">
          @foreach ($sliders as $slider)
          <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
            <img class="d-block w-100" src="{{ asset('images/sliders/'.$slider->image) }}" alt="{{ $slider->title }}" style="height:450px;" />
            <div class="carousel-caption d-none d-md-block margin-top-20">
              <h5>{{ $slider->title }}</h5>
              @if($slider->button_text)
                <a href="{{ $slider->button_link }}" target="_blank" class="btn btn-success">{{$slider->button_text}}</a>
              @endif
            </div>
          </div>
          @endforeach
-->
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</section> 


<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">
      <div class="widget">
      <h3 class="my-4">Featured Products</h3>
      </div>
    </div>
  </div>
  <div class="row">
		<div class="col-md-4">

      @include('partials.product-sidebar')		
		 </div>

		<div class="col-md-8">
			<div class="widget">
				@include('pages.product.partials.all_products')

     <!--   <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
         <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{ asset('images/banner_image/image_1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('images/banner_image/image_7.jpg') }}" alt="Second slide">
            </div>
            <!--<div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('images/banner_image/image_3.jpg') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('images/banner_image/image_4.jpg') }}" alt="Fourth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('images/banner_image/image_5.jpg') }}" alt="Five slide">
            </div>
             --><!--<div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('images/banner_image/image_6.jpg') }}" alt="Five slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>-->
				
       <!--  <div class="container margin-bottom-10"> 
				    <div class="row">
              @foreach ($products as $product)
            
         		 <div class="col-md-4">
         		 <div class="card">
           	 @php $i = 1; @endphp
         		 @foreach ($product->images as $image)
         		 @if ($i > 0)

            <img class="card-img top feature-img" src="{{asset('images/product_image/'.$image->image)}}"  width='600' height='320' alt="SHOW IMAGE HERE" style="max-width:300px">
         		 @endif

           	@php $i++; @endphp
          	@endforeach

            <div class="card-body">
              <h4 class="card-title">
                  {{ $product->title }}
              </h4>
              <p class="card-text">Taka- {{ $product->price}}</p>
              <a href="#" class="btn btn-outline-warning">Add to cart</a>
              </div>
              <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            	</div>
          		</div>
         		 @endforeach 
        		</div>
          </div>-->
         

<!--
         <div class="container margin-bottom-10">
          <div class="row">
            @foreach($products as $product)  
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="{{ url('/') }}/product/details/{{ $product->product_row_id }}"><img class="card-img-top" src="{{ asset('images/product_image/'.$product->product_image) }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="{{ url('/') }}/product/details/{{ $product->product_row_id }}">{{ $product->title }}</a>
                  </h4>
                  <h5>{{ $product->price }}</h5>
                  <p class="card-text">{{ $product->description }}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
      @endforeach
        </div>
        </div>
      -->

			</div>
			<div class="widget"></div>
		</div>
    </div>
</div>



<!-- END SIDEBAR CONTENT -->

@endsection