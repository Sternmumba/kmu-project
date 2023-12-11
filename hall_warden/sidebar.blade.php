<ul class="navbar-nav bg-gradient-info text-danger sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">

    <img class="img-xs rounded-circle " src="warden/assets/images/faces/face15.jpg" alt="" style="width:50px; height:50px">

    <div class="sidebar-brand-text mx-3">Hall Warden</div>
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
    <a class="nav-link" href="{{url('issue_inventory')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Issue Inventory</span></a>
</li>
 <!-- Nav Item - Charts -->
 <li class="nav-item">
    <a class="nav-link" href="{{url('inventories')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>View Issued Inventory</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Rooms
</div>
 <!-- Nav Item - Charts -->
 <li class="nav-item">
    <a class="nav-link" href="{{url('shift_rooms')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Shift Rooms</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Queries
</div>
 <!-- Nav Item - Charts -->
 <li class="nav-item">
    <a class="nav-link" href="{{url('queries')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>View Room Issues</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{url('queries')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>View Other Issues</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{url('queries')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>View Solved Queries</span></a>
</li>



</ul>
