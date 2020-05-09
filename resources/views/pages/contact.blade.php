@extends('layouts.master')	
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Contact <strong>Us</strong></a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div> <h2 class="title text-center card-header bg-primary text-white"> Get In Touch</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
       <!-- <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
					<p style="color: #fff">United International University(UIU</p>
					<p style="color: #fff">United City,Madani Avenue-100 Feet</p>
					<p style="color: #fff">Vatara Thana, NotunBazar</p>
					<p style="color: #fff">Email : mibrahim133061@bscse.uiu.ac.bd</p>
					<p style="color: #fff">Tel. +88 33 66 99 88 77</p>

                </div>

            </div>
        </div>-->
        <div class="col-12 col-sm-4">
        <div class="contact-info mb-3">
            <h2 class="title text-center card-header bg-primary text-white">Contact Info</h2>
            <address>
                <p>E-Shopper Inc.</p>
                <p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
                <p>Newyork USA</p>
                <p>Mobile: +2346 17 38 93</p>
                <p>Fax: 1-714-252-0026</p>
                <p>Email: info@e-shopper.com</p>
            </address>
            <div class="social-networks">
                <h2 class="title text-center card-header bg-primary text-white">Social Networking</h2>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>

    </div> 


    </div>
</div>
<div class="col-12 copyright mt-3">
    <p class="float-left">
        <a href="#">Back to top</a>
    </p>
    <p class="text-right text-muted">created <i class="fa fa-heart"></i> by <a href="https://www.linkedin.com/in/md-ibrahim-1837b6119/"><i>Md.Ibrahim</i></a></p>
</div>
@endsection