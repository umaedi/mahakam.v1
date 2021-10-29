<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5 mb-2 justify-content-center" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="100">
        <div class="col-12 layanan">
            <h5 class="text-center head-title" id="layanan">LAYANAN</h5>
        </div>
    </div>
    <div class="layanan-mobile mb-4">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                    <div class="col-lg-3 col-md-5 col-sm-5" id="construction">
                        <div class="icon-user" data-bs-toggle="tooltip" data-bs-placement="left" title="Sistem Informasi Administrasi Kepala Daerah & DPRD">
                            <div class=" card box-item-image" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100">
                                <a href="">
                                    <img data-src=" <?= base_url(); ?>/assets/img/layanan/user.jpg" class="lazyload card-img-top" alt="bupati mahakam" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5>SIKDAD</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5" id="construction">
                        <div class="ebook" data-bs-toggle="tooltip" data-bs-placement="right" title="Sistem Informasi Administrasi Kepala Daerah & DPRD">
                            <div class=" card box-item-image ms-1" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100">
                                <a href="">
                                    <img data-src=" <?= base_url(); ?>/assets/img/layanan/ebook.jpg" class="lazyload card-img-top" alt="bupati mahakam">
                                    <div class="card-body text-center">
                                        <h5>E-LPPD</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 mb-2 justify-content-center" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="100">
        <div class="col-12 layanan">
            <h5 class="text-center">AGENDA TERBARU</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card img-shadow mb-3" data-aos="fade-right" data-aos-duration="1100" data-aos-offset="100" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url(); ?>/assets/img/layanan/coba.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">LOREM IPSUM IS DATA DUMY</h5>
                            <p class="card-text"><small class="text-muted"><span class="badge bg-warning text-dark">PCR</span> / <i class="far fa-clock"></i> / <?= date('d F Y'); ?></small></p>
                            <p class="card-text"><small class="text-muted"><span class="badge bg-light text-dark">/ <i class="fas fa-map-marker-alt"></i> Bandar Lampung</small></p>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="submit" class="btn btn-sm btn-success">Baca selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-3 img-shadow" data-aos="fade-left" data-aos-duration="1100" data-aos-offset="100" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url(); ?>/assets/img/layanan/coba2.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">LOREM IPSUM IS DATA DUMY</h5>
                            <p class="card-text"><small class="text-muted"><span class="badge bg-warning text-dark">Vaksin</span> / <i class="far fa-clock"></i> / <?= date('d F Y'); ?></small></p>
                            <p class="card-text"><small class="text-muted"><span class="badge bg-light text-dark">/ <i class="fas fa-map-marker-alt"></i> Bandar Lampung</small></p>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="submit" class="btn btn-sm btn-success">Baca selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center my-3">
            <div class="col">
                <a href="<?= base_url(); ?>/agenda"><button type="submit" class="btn btn-sm btn-success">Lihat selengkapnya <i class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-3 col-sm-3 mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="100">
            <div class="bg-content">
                <div class="text-content">
                    <h6 class="fw-bold text-center">Profil</h6>
                    <hr>
                    <ul>
                        <li>
                            <a href="">Kata Pengantar</a>
                        </li>
                        <li>
                            <a href="">Struktur Organisasi</a>
                        </li>
                        <li>
                            <a href="">Tugas Pokok & Fungsi Bagian</a>
                        </li>
                        <a href="">Tugas Pokok & Fungsi Bagian Pemerintahan</a>
                        <li>
                            <a href="">Kontak Kami</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="250">
            <div class="bg-content">
                <div class="text-content">
                    <h6 class="fw-bold text-center">Layanan</h6>
                    <hr>
                    <ul>
                        <li>
                            <a href="">SIKDAD</a>
                        </li>
                        <li>
                            <a href="">E-ELPPD</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="250">
            <div class="bg-content">
                <div class="text-content">
                    <h6 class="fw-bold text-center">Layanan</h6>
                    <hr>
                    <ul>
                        <li>
                            <a href="">SIKDAD</a>
                        </li>
                        <li>
                            <a href="">E-ELPPD</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="250">
            <div class="bg-content">
                <div class="text-content">
                    <h6 class="fw-bold text-center">Layanan</h6>
                    <hr>
                    <ul>
                        <li>
                            <a href="">SIKDAD</a>
                        </li>
                        <li>
                            <a href="">E-ELPPD</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>