<ul class="navbar-nav bg-gradient-info text-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">

                <img class="img-xs rounded-circle m-2" src="warden/assets/images/faces/face15.jpg" alt="" style="width:50px; height:50px">

                <div class="sidebar-brand-text mx-3">Student Coordinator</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 ">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/redirects') }}">
                <i class="fa-solid fa-gauge"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" href="{{ route('view_applicants') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>View Applicants</span></a>
            </li>
             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" href="{{ ('accepted_applicants') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>View Accepted Applicants</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Hostels
            </div>
             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" href="{{ route('student_coordinator') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Add Room</span></a>
            </li>
             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" href="{{ route('view_available_rooms') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>View Available Room</span></a>
            </li>
             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" href="{{ ('accepted_applicants') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>View Assigened Rooms</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>View Student Queries</span></a>
            </li>
             <!-- Register Students -->
             <li class="nav-item">
                <a class="nav-link"  href="{{ ('register_student') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Register Student</span></a>
            </li>


        </ul>
