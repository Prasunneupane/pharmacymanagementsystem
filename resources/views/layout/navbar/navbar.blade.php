<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
                    <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>

                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                
                       
                    </li> <!--end::Messages Dropdown Menu--> <!--begin::Notifications Dropdown Menu-->
                     <!--begin::Fullscreen Toggle-->
                    
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="{{asset('assets/assets/img/user2-160x160.jpg')}}" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Alexander Pierce</span> </a>
                        <ul class="dropdown-menu dropdown-menu-end" style="width:100%;"> <!--begin::User Image-->
                            <li class="user-footer"> <a href="#" class="btn btn-default btn-flat float-end">Profile</a> </li> 
                            <li class="user-footer"><a href="{{url('/logout')}}" class="btn btn-default btn-flat float-end">Sign out</a> </li>
                            <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> <!--begin::Sidebar-->