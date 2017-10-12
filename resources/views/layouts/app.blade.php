<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- === Meta Data === -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="classified webpage">
    <meta name="keywords" content="frontpage">
    <meta name="author" content="">
    <title>ClassifiedZ | @yield('title')</title>

    <!-- === Dependencies === -->

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
        <!-- Navbar Collapsible Button -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar Content -->
    <a class="navbar-brand navbar-header" href="/"><i class="fa fa-search">&nbsp;</i>ClassifiedZ</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar Items -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <li class=" nav-link dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-globe"></i> Browse</li>
                <ul class="dropdown-menu dropdownfix" role="menu" aria-labelledby="dLabel">
                    @foreach ($categories as $category)
                        @if (count($category->children) > 0)
                            <li class="dropdown-item dropdown-submenu">
                                <a href="/categories/{{ $category->id }}">
                                    {{ $category->name }} 
                                    <span class="caret"></span>
                                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach ($category->children as $category2ndTier)
                                        @if (count($category2ndTier->children) > 0)
                                            <li class="dropdown-item dropdown-submenu">
                                                <a href="/categories/{{ $category2ndTier->id }}">
                                                    {{ $category2ndTier->name }} 
                                                    <span class="caret"></span>
                                                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    @foreach ($category2ndTier->children as $category3rdTier)
                                                        <li><a class="dropdown-item" href="/categories/{{ $category3rdTier->id }}">{{ $category3rdTier->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li><a class="dropdown-item" href="/categories/{{ $category2ndTier->id }}">{{ $category2ndTier->name }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li><a class="dropdown-item" href="/categories/{{ $category->id }}">{{ $category->name }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user"></i> Your Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('postAdForm') }}"><i class="fa fa-pencil-square-o"></i> Post an
                Ad</a>
            </li>
        </ul>
        <ul class="navbar-nav">

            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"> <i class="fa fa-sign-in"></i> Login</a>
            </li>
            @else
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="/profile">Profile</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                style="display: none;">
                {{ csrf_field() }}
                </form>
                </li>
    </ul>
</li>
@endguest
<!-- Navbar Search Field -->
<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search for anything...">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>
</ul>
</div>
</nav>
<!-- NAV END -->
<div class="container-fluid content">

    @yield('content')
    
</div>
<!-- FOOTER -->
<footer class="p-5 bg-inverse text-muted">
    <div class="container">
        <div class="row">
            <ul class="list-inline m-1">
                <li class="list-inline-item">&copy; ClassifiedZ 2017</li>
                <li class="list-inline-item"><a href="/privacy"  class="text-muted">Privacy Notice</a></li>
                <li class="list-inline-item"><a href="/postingpolicy"  class="text-muted">Posting Policy</a></li>
                <li class="list-inline-item"><a href="/refund"  class="text-muted">Sales and Refunds</a></li>
                <li class="list-inline-item"><a href="/terms"  class="text-muted">Terms of Use</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- FOOTER END-->
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- === Dependencies === -->
<!-- Custom JS -->
<script src="{{ asset('js/script.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/tether/tether.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>
