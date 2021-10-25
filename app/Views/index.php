<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5 mb-2 justify-content-center" data-aos="fade-down" data-aos-duration="1000" data-aos-offset="100">
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
                                    <img data-src=" <?= base_url(); ?>/assets/img/layanan/user.jpg" class="lazyload card-img-top" alt="bupati mahakam" width="20%" class="card-img-top" alt="...">
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
    <div class="row mt-5 mb-2 justify-content-center" data-aos="fade-down" data-aos-duration="1000" data-aos-offset="100">
        <div class="col-12 layanan">
            <h5 class="text-center">AGENDA TERBARU</h5>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-8">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card box-item-image" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100">
                        <a href="" id="construction2">
                            <img data-src=" <?= base_url(); ?>/assets/img/layanan/layanan1.jpg" class="lazyload card-img-top" alt="bupati mahakam">
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM IS DUMY TEXT</h5>
                                <p class="card-text"><i class="far fa-clock"></i> Pukul : <?= date('h:i'); ?> WIB</p>
                                <p class="card-text"><i class="far fa-calendar-alt"></i> <?= date('m-Y'); ?> - </i> <?= date('m-Y'); ?></p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> di Bandar Lampung</p>
                                <p class="card-text"><i class="fas fa-file-pdf"></i></i> Not available</p>
                                <button class="btn btn-sm btn-custom float-end mb-3">Selengkapnya</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card box-item-image" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="150">
                        <a href="" id="construction3">
                            <img data-src=" <?= base_url(); ?>/assets/img/layanan/layanan3.jpg" class="card-img-top lazyload" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM IS DUMY TEXT</h5>
                                <p class="card-text"><i class="far fa-clock"></i> Pukul : <?= date('h:i'); ?> WIB</p>
                                <p class="card-text"><i class="far fa-calendar-alt"></i> <?= date('m-Y'); ?> - </i> <?= date('m-Y'); ?></p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> di Bandar Lampung</p>
                                <p class="card-text"><i class="fas fa-file-pdf"></i></i> Not available</p>
                                <button class="btn btn-sm btn-custom float-end mb-3">Selengkapnya</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card box-item-image" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="250">
                        <a href="" id="construction4">
                            <img data-src="<?= base_url(); ?>/assets/img/layanan/layanan2.jpg" class="card-img-top lazyload" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM IS DUMY TEXT</h5>
                                <p class="card-text"><i class="far fa-clock"></i> Pukul : <?= date('h:i'); ?> WIB</p>
                                <p class="card-text"><i class="far fa-calendar-alt"></i> <?= date('m-Y'); ?> - </i> <?= date('m-Y'); ?></p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> di Bandar Lampung</p>
                                <p class="card-text"><i class="fas fa-file-pdf"></i></i> Not available</p>
                                <button class="btn btn-sm btn-custom float-end mb-3">Selengkapnya</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card box-item-image" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="110" data-aos-delay="100">
                        <a href="" id="construction5">
                            <img data-src="<?= base_url(); ?>/assets/img/layanan/layanan4.jpg" class="card-img-top lazyload" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM IS DUMY TEXT</h5>
                                <p class="card-text"><i class="far fa-clock"></i> Pukul : <?= date('h:i'); ?> WIB</p>
                                <p class="card-text"><i class="far fa-calendar-alt"></i> <?= date('m-Y'); ?> - </i> <?= date('m-Y'); ?></p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> di Bandar Lampung</p>
                                <p class="card-text"><i class="fas fa-file-pdf"></i></i> Not available</p>
                                <button class="btn btn-sm btn-custom float-end mb-3">Selengkapnya</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card box-item-image" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="110" data-aos-delay="150">
                        <a href="" id="construction6">
                            <img data-src="<?= base_url(); ?>/assets/img/layanan/layanan6.jpg" class="card-img-top lazyload" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM IS DUMY TEXT</h5>
                                <p class="card-text"><i class="far fa-clock"></i> Pukul : <?= date('h:i'); ?> WIB</p>
                                <p class="card-text"><i class="far fa-calendar-alt"></i> <?= date('m-Y'); ?> - </i> <?= date('m-Y'); ?></p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> di Bandar Lampung</p>
                                <p class="card-text"><i class="fas fa-file-pdf"></i></i> Not available</p>
                                <button class="btn btn-sm btn-custom float-end mb-3">Selengkapnya</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card box-item-image" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="110" data-aos-delay="200">
                        <a href="" id="construction7">
                            <img data-src="<?= base_url(); ?>/assets/img/layanan/layanan5.jpg" class="card-img-top lazyload" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LOREM IPSUM IS DUMY TEXT</h5>
                                <p class="card-text"><i class="far fa-clock"></i> Pukul : <?= date('h:i'); ?> WIB</p>
                                <p class="card-text"><i class="far fa-calendar-alt"></i> <?= date('m-Y'); ?> - </i> <?= date('m-Y'); ?></p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> di Bandar Lampung</p>
                                <p class="card-text"><i class="fas fa-file-pdf"></i></i> Not available</p>
                                <button class="btn btn-sm btn-custom float-end mb-3">Selengkapnya</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=" row justify-content-center mt-3">
            <div class="col-lg-4 col-md-4 col-sm-6 mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="100">
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
            <div class="col-lg-4 col-md-4 col-sm-6 mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="250">
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
        <div class=" row justify-content-center mt-3">
            <div class="col-lg-4 col-md-4 col-sm-6 mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="350">
                <div class="bg-content">
                    <div class="text-content">
                        <h6 class="fw-bold text-center">Agenda</h6>
                        <hr>
                        <a href="">Belum ada agenda</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100" data-aos-delay="450">
                <div class="bg-content">
                    <div class="text-content">
                        <h6 class="fw-bold text-center">Download</h6>
                        <hr>
                        <ul>
                            <li>
                                <a href="">Adm. KD & DPRD</a>
                            </li>
                            <li>
                                <a href="">LPPDRLPPD</a>
                            </li>
                            <li>
                                <a href="">SPM</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>