 <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{route('admin.index') }}"><img src="{{asset('images/logo_star_black.png')}}" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{route('admin.index') }}"><img src="{{asset('images/logo_star_mini.jpg')}}" alt=""></a>
      </div>

    <div class="navbar-menu-wrapper d-flex align-items-center">
      <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
        <span class="navbar-toggler-icon"> </span>
      </button>
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('products')}}">Gallery</a>
      </li>
      <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('contact')}}">Contact</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="mdi mdi-calendar"></i>Calendar</a>
      </li>
    </ul> 
    <ul class="navbar-nav ml-auto">
    <li>
    <a class="nav-link" href="{{route('carts')}}">
      <button class="rounded-circle btn btn-info" href="#" type="button">
           <span>{{ App\Cart::totalItems() }}</span> 
      </button>
    </a>
    </li>
    <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
      <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
    </form>
    <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="{{asset('images/faces.jpg')}}" class="img rounded-circle" style="width:40px">
        <span class="caret"></span>
      </a>

      <div class="dropdown-menu" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="{{ route('admin.index') }}">
          My dashboard
        </a>

        <a class="dropdown-item" href="{{ route('admin.logout.submit') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Logout
      </a>

      <form id="logout-form" action="{{ route('admin.logout.submit') }}" method="POST" 
      style="display: none;">
        @csrf
      </form>
    </div>
  </li>
    <!--li class="nav-item">
      <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="{{asset('images/faces.jpg')}}" alt=""></a>
    </li-->
    
         
    </ul>
</div>
 </nav>