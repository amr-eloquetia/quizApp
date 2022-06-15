<header class="header">
    <div style="background-color: #58056b">
        <nav class="navbar navbar-expand-lg navbar-dark" style="margin-bottom: 0 !important">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{-- <img src="{{ asset('assets/images/logo.png') }}" alt="image-not-found"> --}}
                    QUIZ WEBSITE
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto justify-content-center" style="width: 100%;min-height:60px">
                        <li class="nav-item active nav-li">
                            <a class="nav-link nav-btn" href="{{ route('home') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item nav-li">
                            <a class="nav-link nav-btn" href="">About</a>
                        </li>
                        <li class="nav-item nav-li">
                            <a class="nav-link nav-btn" href="">Contact</a>
                        </li>
                        <li class="nav-item nav-li">
                            <a class="nav-link nav-btn" href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li class="nav-item nav-li">
                            <a class="nav-link nav-btn" href="">Privacy</a>
                        </li>
                        <li class="nav-item nav-li">
                            <a class="nav-link nav-btn" href="">Terms</a>
                        </li>
                    </ul>
                    @if (Auth::user())
                    <ul class="navbar-nav ml-auto justify-content-center" style="width: 100%">
                        <li class="nav-item" style="margin-left:1.5rem"><a class="nav-link"
                                href="{{ route('buyTokens.get') }}" style="d-flex">Tokens:<b
                                    style="color:#38ab0e">&nbsp;{{
                                    Auth::user()->tokens }}</b></a></li>
                        <li class="nav-item" style="margin-left:1.5rem"><a class="nav-link" href=""
                                style="d-flex">Credits:<b style="color:#38ab0e">&nbsp;{{
                                    Auth::user()->credits }}</b></a></li>
                        <li class="nav-item" style="margin-left:1.5rem">
                            <a class="nav-link" href="{{ route('myAccount') }}" class="user__btn">My Account</a>
                        </li>
                        <li class="nav-item" style="margin-left:1.5rem">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                    @else
                    <ul class="navbar-nav ml-auto justify-content-center" style="width: 100%">
                        <li class="nav-item" style="margin-left:1.5rem">
                            <a class="nav-link" href="{{ route('loginPage') }}">Sign In</a>
                        </li>
                        <li class="nav-item" style="margin-left:1.5rem">
                            <a class="nav-link" href="{{ route('registerPage') }}">Sign Up</a>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</header>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/countdown.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script>
    //toggle navbar
    $(document).ready(function () {
        $('.navbar-toggler').on('click', function () {
            $('.navbar-collapse').toggleClass('show');
        });
    });
</script>
