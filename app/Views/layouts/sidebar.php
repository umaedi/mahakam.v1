   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
           <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-laugh-wink"></i>
           </div>
           <div class="sidebar-brand-text mx-3">SIKDAD</div>
       </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item">
           <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider">
       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
               <i class="fas fa-user-friends"></i>
               <span>Walikota</span>
           </a>
           <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <a class="collapse-item" href="utilities-color.html">Bupati</a>
                   <a class="collapse-item" href="utilities-border.html">Wakil Bupati</a>
               </div>
           </div>
       </li>
       <hr class="sidebar-divider d-none d-md-block">
       <li class="nav-item">
           <a class="nav-link" href="tables.html">
               <i class="fas fa-calendar-alt"></i>
               <span>Agenda</span></a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="tables.html">
               <i class="fas fa-file-pdf"></i>
               <span>Dokumen</span></a>
       </li>
       <hr class="sidebar-divider d-none d-md-block">
       <li class="nav-item">
           <a class="nav-link" href="tables.html">
               <i class="fas fa-cog"></i>
               <span>Pengaturan</span></a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="<?= base_url(); ?>/auth/logout" onclick="return confirm('Keluar Dari Admin Panel ?')">
               <i class="fas fa-angle-double-left"></i>
               <span>Keluar</span></a>
       </li>
       <!-- Sidebar Toggler (Sidebar) -->
       <div class="text-center d-none d-md-inline">
           <button class="rounded-circle border-0" id="sidebarToggle"></button>
       </div>

   </ul>
   <!-- End of Sidebar -->