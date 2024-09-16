<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
<!-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> -->
    
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup> </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="admin/main">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- <hr class="sidebar-divider"> -->
    <!-- <div class="sidebar-heading">Interface</div> -->
    
    <li class="nav-item">
        <a class="nav-link" href="{{route('data.index')}}"><i class="fas fa-fw fa-chart-area"></i><span>Data</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('advertise.index')}}"><i class="fas fa-fw fa-chart-area"></i><span>Advertise</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}"><i class="fas fa-fw fa-chart-area"></i><span>Users</span></a>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>