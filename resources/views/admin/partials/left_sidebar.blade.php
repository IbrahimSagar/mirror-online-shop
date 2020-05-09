<!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="{{asset('images/faces.jpg')}}" alt="">
            <p class="name">Ibrahim Sagar </p>
            <p class="designation">CEO</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.index') }}">
                <img src="{{asset('images/icons/1.png')}}" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{asset('images/icons/9.png')}}" alt="">
                <span class="menu-title">Manage Products<i class="fa fa-sort-down"></i></span></a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="{{ route('admin.products')}}">Manage Product</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('admin.product.create')}}">Add Product</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#order-pages" aria-expanded="false" aria-controls="order-pages">
                <img src="{{asset('images/icons/9.png')}}" alt="">
                <span class="menu-title">Manage Orders<i class="fa fa-sort-down"></i></span></a>
              <div class="collapse" id="order-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="{{ route('admin.orders')}}">Manage Orders</a></li>
                </ul>
              </div>
            </li>
			     <li class="nav-item">
			       <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="sample-pages">
			         <img src="{{asset('images/icons/9.png')}}" alt="">
			         <span class="menu-title">Manage Categories<i class="fa fa-sort-down"></i></span></a>
			       <div class="collapse" id="category-pages">
			         <ul class="nav flex-column sub-menu">
			          <li class="nav-item"><a class="nav-link" href="{{ route('admin.categories')}}">Manage Category</a></li>
			          <li class="nav-item"><a class="nav-link" href="{{ route('admin.category.create')}}">Add Category</a></li>
			         </ul>
			       </div>
			     </li>
          <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="general-pages"> 
            <img src="{{asset('images/icons/9.png')}}" alt="">
            <span class="menu-title">
            Manage Brands</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="brand-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" 
                  href="{{ route('admin.brands') }}">Manage Brand</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brand.create') }}">Add Brand</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
             <a class="nav-link" data-toggle="collapse" href="#division-pages" aria-expanded="false" aria-controls="sample-pages">
               <img src="{{asset('images/icons/9.png')}}" alt="">
               <span class="menu-title">Manage Divisions<i class="fa fa-sort-down"></i></span></a>
             <div class="collapse" id="division-pages">
               <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.divisions')}}">Manage Division</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.division.create')}}">Add Division</a></li>
               </ul> 
             </div>
           </li>
          <li class="nav-item">
             <a class="nav-link" data-toggle="collapse" href="#district-pages" aria-expanded="false" aria-controls="sample-pages">
               <img src="{{asset('images/icons/9.png')}}" alt="">
               <span class="menu-title">Manage District<i class="fa fa-sort-down"></i></span></a>
             <div class="collapse" id="district-pages">
               <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.districts')}}">Manage District</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.district.create')}}">Add District</a></li>
               </ul>
             </div>
           </li>
           <li class="nav-item">
             <a class="nav-link" data-toggle="collapse" href="#slider-pages" aria-expanded="false" aria-controls="sample-pages">
               <img src="{{asset('images/icons/9.png')}}" alt="">
               <span class="menu-title">Manage Sliders<i class="fa fa-sort-down"></i></span></a>
             <div class="collapse" id="slider-pages">
               <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.sliders')}}">Manage Slider</a></li>
               </ul>
             </div>
           </li>  
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="{{asset('images/icons/10.png')}}" alt="">
                <span class="menu-title">Settings</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <form class="form-inline" action="{{ route('admin.logout.submit') }}" method="post">
                  @csrf
                  <input type="submit" value="logout Now" class="btn btn-danger">
                </form>
              </a>
            </li>
          </ul>
        </nav>