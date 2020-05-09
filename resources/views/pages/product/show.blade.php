@extends('layouts.master')

@section('title')

  {{ $product->title }} | Mirror Mobile Shop

@endsection

@section('content')
  
    <div class="row" style="margin: 30px 0px">

    <div class="col-md-4">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    @php
      $i = 1;
    @endphp
    @foreach ($product->images as $image)  
    <div class="product-item carousel-item {{ $i == 1 ? 'active':'' }}">
      <img class="d-block w-100" src="{!! asset('images/product_image/'.$image->image) !!}" alt="First Slide">
    </div>
    @php
    $i++;
    @endphp
    @endforeach
   </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
   </div>

    </div>

    <div class="col-md-8">
      <div class="widget">
          <h3> {{ $product->title }}</h3>
          <h3> {{ $product->price }}Taka 
            <span class="badge badge-primary">
            {{ $product->quantity < 1 ? "No product available" : $product->quantity.' - Item in Stock' }}
            </span>
          </h3>
          <div class="product-description">
           {!! $product->description !!}
          </div>
      </div> 
      <div class="widget"></div>
    </div>
  </div>

@endsection