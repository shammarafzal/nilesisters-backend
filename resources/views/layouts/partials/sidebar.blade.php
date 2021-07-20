<!-- Left Sidenav -->
<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="{{ route('index') }}" class="logo">
            <span style="color: #011592;">
                {{-- <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">--}}
                <h4><strong>Nilesisters</strong></h4>
            </span>
            {{--<span>
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-dark">
            </span>--}}
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li class="menu-label mt-0">Main</li>
            <li>
                <a href="{{ route('index') }}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('resource.index') }}"> <i data-feather="package" class="align-self-center menu-icon"></i><span>Resources</span></a>
            </li>
            <li>
                <a href="{{ route('event.index') }}"> <i data-feather="layout" class="align-self-center menu-icon"></i><span>Events</span></a>
            </li>
            <li>
                <a href="{{ route('video.index') }}"> <i data-feather="video" class="align-self-center menu-icon"></i><span>Videos</span></a>
            </li>
            <li>
                <a href="{{ route('staff.index') }}"> <i data-feather="users" class="align-self-center menu-icon"></i><span>Staff</span></a>
            </li>
            <li>
                <a href="{{ route('about.index') }}"> <i data-feather="archive" class="align-self-center menu-icon"></i><span>About Us</span></a>
            </li>
            <li>
                <a href="{{ route('contact.index') }}"> <i data-feather="phone" class="align-self-center menu-icon"></i><span>our Contact</span></a>
            </li>
            <li>
                <a href="{{ route('homepage.index') }}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Home Page</span></a>
            </li>
            <li>
                <a href="{{ route('user.index') }}"> <i data-feather="users" class="align-self-center menu-icon"></i><span>Users</span></a>
            </li>
            <li>
                <a href="{{ route('contactus.index') }}"> <i data-feather="phone-incoming" class="align-self-center menu-icon"></i><span>Contact us</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- end left-sidenav-->