<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link text-center">
        {{-- <img src="{{asset('img/favicon.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">--}}
        <span class="brand-text font-weight-light">Quiz App</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3  text-center d-flex align-items-center justify-content-center">
            {{-- <div class="image">
                <img src="{{URL::asset('storage/user_avatars/'.Auth::user()->avatar)}}" class="img-circle elevation-2"
                    alt="User Image">
            </div> --}}
            <div class="">
                <a href="#" class="text-light ">{{Auth::user()->email}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="h4 text-light text-center">Meniu principal</li>
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}"
                        class="nav-link {{(request()->segment(2) == 'dashboard' ? 'active' : '')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.users')}}"
                        class="nav-link {{(request()->segment(2) == 'dashboard' ? 'active' : '')}}">
                        <i class="nav-icon fas fa-solid fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.prizes')}}"
                        class="nav-link {{(request()->segment(2) == 'dashboard' ? 'active' : '')}}">
                        <i class="nav-icon fas fa-solid fa-cart-arrow-down"></i>
                        <p>
                            Prizes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.prizesWon')}}"
                        class="nav-link {{(request()->segment(2) == 'dashboard' ? 'active' : '')}}">
                        <i class="nav-icon fas fa-solid fa-hand-holding-dollar"></i>
                        <p>
                            Prizes Won
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.quizQuestions')}}"
                        class="nav-link {{(request()->segment(2) == 'dashboard' ? 'active' : '')}}">
                        <i class="nav-icon fas fa-solid fa-circle-question"></i>
                        <p>
                            Questions
                        </p>
                    </a>
                </li>
                <li class="nav-item mt-5">
                    <a href="{{route('logout')}}" class="nav-link text-warning">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
