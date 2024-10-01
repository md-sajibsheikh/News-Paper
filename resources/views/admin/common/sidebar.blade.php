 <nav class="sidebar sidebar-offcanvas mt-9" id="sidebar">
     <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
         <a class="sidebar-brand brand-logo text-decoration-none text-info " href="{{url('dashboard')}}"><span>Admin Dashboard</span></a>
         <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="/admin/assets/images/logo-mini.svg" alt="logo" /></a>
     </div>
     <ul class="nav mb-96">
         <li class="nav-item profile">
             <div class="profile-desc">
                 <div class="profile-pic">
                     <div class="count-indicator">
                         <img class="img-xs rounded-circle " src="{{asset(Auth::user()->img)}}" alt="">
                         <span class="count bg-success"></span>
                     </div>
                     <div class="profile-name">
                         <h5 class="mb-2 font-weight-normal ">{{Auth::user()->name}}</h5>
                         <span>{{Auth::user()->is_admin==1 ? 'Admin': 'User'}}</span>
                     </div>
                 </div>
         <li class="nav-item nav-category ">
             <span class="nav-link">Navigation</span>
         </li>
         <li class="nav-item menu-items p-1 mb-2">
             <a class="nav-link" href="{{route('admin')}}">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Dashboard</span>
             </a>
         </li>



         <li class="nav-item menu-items p-1 mb-2">
             <a class="nav-link" href="{{ route('get-in-touch') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-message-text"></i>
                 </span>
                 <span class="menu-title">Get in Touch</span>
             </a>
         </li>


         <li class="nav-item menu-items p-1 mb-2">
             <a class="nav-link" href="{{ route('all-user') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-account"></i>
                 </span>
                 <span class="menu-title">User</span>
             </a>
         </li>
         <li class="nav-item menu-items p-1 mb-2 {{ request()->routeIs('all-admin') ? 'active' : '' }}">
             <a class="nav-link" href="{{ route('all-admin') }}">
                 <span class="menu-icon">
                     <i class="mdi mdi-account"></i>
                 </span>
                 <span class="menu-title">Admin</span>
             </a>
         </li>




     </ul>
 </nav>