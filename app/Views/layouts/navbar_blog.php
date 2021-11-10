   <nav class="navbar navbar-bg navbar-expand-lg navbar-dark bg-transparent fixed-top">
       <div class="container">
           <a class="navbar-brand" href="<?= base_url(); ?>">
               <img class="lazyload" src="<?= base_url(); ?>/assets/img/logo/logo.png" width="180px" alt="logo">
           </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item me-4">
                       <a class="nav-link fw-bold" href="<?= base_url(); ?>">Beranda</a>
                       <div class="animation start-home"></div>
                   </li>
                   <li class="nav-item me-4">
                       <div class="dropdown ">
                           <a class="nav-link fw-bold" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                               <span class="dropdown-toggle">Profil</span>
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                               <li><a class="dropdown-item" href="<?= base_url(); ?>/biografi/bupati">Bupati</a></li>
                               <li><a class="dropdown-item" href="<?= base_url(); ?>/biografi/wakil">Wakil Bupati</a></li>
                           </ul>
                       </div>
                   </li>
                   <li class="nav-item me-4">
                       <a class="nav-link fw-bold" href="#">Layanan</a>
                       <div class="animation start-home"></div>
                   </li>
                   <li class="nav-item me-4">
                       <a class="nav-link fw-bold" href="<?= base_url(); ?>/agenda">Agenda</a>
                       <div class="animation start-home"></div>
                   </li>
                   <li class="nav-item me-4">
                       <a class="nav-link fw-bold" href="<?= base_url(); ?>/dokumen/download">Download</a>
                       <div class="animation start-home"></div>
                   </li>
                   <li class="nav-item">
                       <a href="<?= base_url(); ?>/login" class="nav-link"><i class="fas fa-user"></i></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-search"></i></a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <h4 class="ms-3 mt-3">Kolom pencarian</h4>
               <div class="modal-body">
                   <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ketikan sesuatu untuk mencari">
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                   <button type="button" class="btn btn-success">Cari</button>
               </div>
           </div>
       </div>
   </div>