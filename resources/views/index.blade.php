@extends('layouts.master')	

@section('content')


<!-- start sidebar + content -->
<div class="container margin-top-20">
	<div class="row">
		<div class="col-md-4">
			<div class="list-group">
			<ol>
			  <a href="#" class="list-group-item list-group-item-action">First item</a>
			  <a href="#" class="list-group-item list-group-item-action">Second item</a>
			  <a href="#" class="list-group-item list-group-item-action">Third item</a>
			</ol>
			</div>
			 
		</div>
		<div class="col-md-8">
			<div class="widget">
				<h3>Featured Product</h3>
				<div class="row">

					<div class="col-md-3">
						<div class="card">
						
						  <img class="card-img-top feature-img" src="{{asset('images/product_image/'.'samsung.png')}}" alt="Card image">
						
						  <div class="card-body">
						    <h4 class="card-title">Samsung</h4>
						    <p class="card-text"></p>
						    <a href="#" class="btn btn-primary">Add to cart</a>
						  </div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card">
						  <img class="card-img-top feature-img" src="{{asset('images/product_image/'.'MI A2.png')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Mi A2</h4>
						    <p class="card-text"></p>
						    <a href="#" class="btn btn-outline-success">Add to cart</a>
						  </div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card">
						  <img class="card-img-top feature-img" src="{{asset('images/product_image/'.'IPhone X.png')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">IPhone X</h4>
						    <p class="card-text"></p>
						    <a href="#" class="btn btn-outline-warning">Add to cart</a>
						  </div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card">
						  <img class="card-img-top feature-img" src="{{asset('images/product_image/'.'VIVO 15.png')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">VIVO 15</h4>
						    <p class="card-text"></p>
						    <a href="#" class="btn btn-outline-secondary">Add to cart</a>
						  </div>
						</div>
					</div>

                   <div class="col-md-3">
						<div class="card">
						  <img class="card-img-top feature-img" src="{{asset('images/product_image/'.'Huawei.png')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">HUAWEI</h4>
						    <p class="card-text"></p>
						    <a href="#" class="btn btn-outline-warning">Add to cart</a>
						  </div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card">
						  <img class="card-img-top feature-img" src="{{asset('images/product_image/'.'Oppo.png')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">OPPO</h4>
						    <p class="card-text"></p>
						    <a href="#" class="btn btn-outline-secondary">Add to cart</a>
						  </div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
						  <img class="card-img-top feature-img" src="{{asset('images/product_image/'.'Huawei.png')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">HONOR</h4>
						    <p class="card-text"></p>
						    <a href="#" class="btn btn-outline-success">Add to cart</a>
						  </div>
						</div>
					</div>


				</div>
			</div>
           </div>
		</div>
	</div>
</div>

<!-- END SIDEBAR CONTENT -->



@endsection