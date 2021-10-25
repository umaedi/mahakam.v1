   <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
       <div class="container">
           <a class="navbar-brand" href="#">
               <img class="lazyload" src="<?= base_url(); ?>/assets/img/logo/logo.png" width="220" alt="logo">
           </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item me-4">
                       <a class="nav-link active fw-bold" aria-current="page" href="#">Profil</a>
                   </li>
                   <li class="nav-item me-4">
                       <a class="nav-link fw-bold" href="#">Layanan</a>
                       <div class="animation start-home"></div>
                   </li>
                   <li class="nav-item me-4">
                       <a class="nav-link fw-bold" href="#">Agenda</a>
                       <div class="animation start-home"></div>
                   </li>
                   <li class="nav-item me-4">
                       <a class="nav-link fw-bold" href="#">Download</a>
                       <div class="animation start-home"></div>
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