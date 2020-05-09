@extends('layouts.master')


@section('content')

 <div class="container margin-top-20">
	<div class="card card-body">
	   <h3>Confirm Items</h3>
	   <hr>
	   <div class="row">
	   	<div class="col-md-7 border-right">
	   		@foreach(App\Cart::totalCarts() as $cart)
			 <p>
			 	{{ $cart->product->title }} -
			 	<strong>{{ $cart->product->price }} Taka </strong> 
			 	- {{ $cart->product_quantity }} Item
			 </p>
			 @endforeach
	   	</div>
	   	<div class="col-md-5">
	   		@php
	   		 $total_price = 0;
	   		@endphp
	   		@foreach (App\Cart::totalCarts() as $cart)
			 @php
			   $total_price += $cart->product->price * $cart->product_quantity;
			 @endphp
			@endforeach
			<p>Total Price : <strong>{{ $total_price }}</strong> Taka </p>
			<p>Total Price With Shipping Cost: <strong>{{ $total_price + App\Setting::first()->shipping_cost }}</strong> Taka</p>
	   	</div>
	   </div>
			 
		<p>
			<a href="{{ route('carts')}}"> Change Cart Item</a>
		</p>			 
</div>

<div class="card card-body mt-2 mb-4">
   	<h3>Shipping Address</h3>

   	  <form method="POST" action="{{ route('checkouts.store') }}">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Reciever Name') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="name" 
                value="{{ Auth::check() ? Auth::user()->first_name.' '.Auth::user()->last_name : '' }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
    	</div>
        <div class="form-group row">
           <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

	        <div class="col-md-6">
	            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
	             value="{{ Auth::check() ? Auth::user()->email : '' }}" required >

	            @error('email')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
	        </div>
	    </div>

     <div class="form-group row">
        <label for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

        <div class="col-md-6">
            <input id="phone_no" type="phone_no" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ Auth::check() ? Auth::user()->phone_no : ''  }}" 
            required >

            @error('phone_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Additional Message(Optional)') }}</label>

        <div class="col-md-6">
            <textarea  id="message" type="text" class="form-control @error('message') is-invalid @enderror" rows="4" name="message">
            </textarea>
            @error('message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div> 
    <div class="form-group row">
        <label for="shipping_address" class="col-md-4 col-form-label text-md-right">{{ __('Shipping Address(*)') }}</label>

        <div class="col-md-6">
            <textarea  id="shipping_address" type="text" class="form-control @error('shipping_address') is-invalid @enderror" rows="4" name="shipping_address">{{ Auth::check() ? Auth::user()->shipping_address : '' }}
            </textarea>
            @error('shipping_address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>            
    <div class="form-group row">
      <label for="payment_method" class="col-md-4 col-form-label text-md-right">Select a Payment Method</label>

        <div class="col-md-6">
        <select class="form-control" name="payment_method_id" required id="payments">
        	<option value="">Select a payment Method</option>
        	@foreach ($payments as $payment)
        		<option value="{{ $payment->short_name }}">{{ $payment->name }}</option>
        	@endforeach
        </select>
        @foreach ($payments as $payment)
    		@if ($payment->short_name == "cash_in")							                    	       		
            <div id ="payment_{{ $payment->short_name }}" class="alert alert-success mt-2 text-center hidden">
    				<h3>
    					For Cash in there is nothing necessary. Just Click Finish Order.
    					<br>
    					<small>
    						You will get your product  by two or three business days.
    					</small>
    				</h3>
			</div>
    		@else
    		    <div class="row">
    		    	<div class="col-md-6">
    		    	 <div id ="payment_{{ $payment->short_name }}" class="alert alert-success mt-2 text-center hidden">
    				<h3>{{ $payment->name }} Payment</h3>
    				<p>
    					<strong>{{ $payment->name }} No : {{ $payment->no }}</strong>
    					<br>
    					<strong>Account Type : {{ $payment->type }}</strong>
    				</p>
    				<div class="alert alert-success">
    					Please send the above money to this Bkash No. and right your transcation code below there.
    				</div>
                    <input type="text" name="transcation_id" class="form-control">
    				</div>
    		    	</div>
    		    </div>
    		@endif
     
    @endforeach

    <input type="text" name="transcation_id" id="transcation_id" class="form-control hidden" placeholder="Enter transcation code">
    </div>
     </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Order Now') }}
                </button>
            </div>
        </div>
    </form>
		    		 
   </div>
</div>

@endsection

@section('scripts')
   <script type="text/javascript">
	$("#payments").Change(function(){
	   $payment_method = $("#payments").val();
    	if ($payment_method == "cash_in") {
    		$("#payment_cash_in").removeClass('hidden');
    		$("#payment_bkash").addClass('hidden');
    		$("#payment_rocket").addClass('hidden');
    	}else if ($payment_method=="bkash") {

    		$("#payment_bkash").removeClass('hidden');
    		$("#payment_cash_in").addClass('hidden');
    		$("#payment_rocket").addClass('hidden');
    		$("#transcation_id").removeClass('hidden');

    	}else if ($payment_method== "rocket") {

    		$("#payment_rocket").removeClass('hidden');
    		$("#payment_bkash").removeClass('hidden');
    		$("#payment_cash_in").addClass('hidden');
    	    $("#transcation_id").removeClass('hidden');

    	}
    })
</script>
@endsection