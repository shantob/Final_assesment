<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    @foreach ($categories as $category)
                    <a href="{{ route('frontend.products.index', $category->id) }}">{{$category->name}}</a>

                    @endforeach
                </div>
            </nav>
        </div>

        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">

                        <a href="{{ route('home') }}"><button class="btn btn-light px-2 {{ Route::is('home') ? 'active' : '' }} mx-2">Home</button></a>
                        <a href="{{ route('productlist') }}"><button class="{{ Route::is('productlist') ? 'active' : '' }} btn btn-light px-2 mx-2">All
                                Product</button></a>
                        <a href="{{ route('contact') }}"><button class="btn btn-light px-2 {{ Route::is('contact') ? 'active' : '' }} mx-2">Contact
                                Us</button></a>

                        <a href="{{ route('about') }}"><button class="btn btn-light px-2 {{ Route::is('about') ? 'active' : '' }} mx-2">About</button></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                    </div>
                    @if (Auth::user() != null)
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Wiew Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button onclick="event.preventDefault();this.closest('form').submit();" class="dropdown-item btn">Logout</button>
                            </form>
                        </div>
                    </div>
                    @else
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ route('login') }}" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-user"></i>Login</a>
                    </div>
                    @endif
                </div>
        </div>
    </div>
    </nav>
</div>
</div>
</div>
<!-- Navbar End -->


<!-- Page Header Start -->
