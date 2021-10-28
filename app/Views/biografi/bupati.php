<?php $this->extend('layouts/template1') ?>

<?php $this->section('content') ?>
<div class="container my-5">
    <section class="pejabat">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card">
                    <div class="col">
                        <h5 class="card text-white bg-success py-2 text-center mb-3">PERIODE 2021-2024</h5>
                    </div>
                    <img data-src="<?= base_url(); ?>/assets/img/bupati/bupati.jpg" class="lazyload card-img-top rounded-circle" alt="...">
                    <div class="card-body">
                        <h5 class="card-text name ">Bonifasius Belawan Geh, SH</h5>
                        <h5 class="text-center">Bupati Mahakam Ulu</h5>
                        <hr>
                        <p class="text-italic text-center"><span class="fw-bold">Motto</span><br>“Orang Lain Bisa, Saya Harus Bisa”(dalam segi Positif)"</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-6">
                <div class="card">
                    <div class="row">
                        <div class="col">
                            <h5 class="card text-white bg-success py-2 fw-bold text-center mb-3">PROFIL BUPATI</h5>
                        </div>
                    </div>
                    <ul class="nav nav-tabs ms-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active me-3 fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">DATA DIRI</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link me-3 fw-bold" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">RIWAYAT PENDIDIKAN</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link me-3 fw-bold" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">PERJALANAN KARIR</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table table-borderless">
                                <div class="row ms-2 mt-3">
                                    <div class="col-sm-3">
                                        <p>Nama</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: Bonifasius Belawan Geh, SH</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Agama</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: Katolik</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Tempat Tanggal Lahir</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: Mamahak Besar, 17 September 1966</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Istri</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: Ny. Yovita Bulan Bonifasius</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Anak</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: 1. Angelina Idang Belawan</p>
                                        <p>: 2. Marcellus Hajang Belawan</p>
                                        <p>: 3. Owena Mayang Shari Belawan</p>
                                        <p>: 4. Marisa Mellisa Dau Belawan</p>
                                        <p>: 5. Ivana Lun Belawan</p>
                                    </div>
                                </div>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="table table-borderles">
                                <div class="row ms-2 mt-2">
                                    <div class="col-sm-3">
                                        <p>Pendidikan Dasar</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: 1974 – 1980 SDN 017 Mamahak Besar</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Menengah</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: 1980 – 1983 SMP WR. Supratman Tering</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Lanjutan</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: 1983 – 1986 SMK Cendana Samarinda</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Perguruan Tinggi</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: 2006 – 2010 Fakultas Hukum Universitas 17 Agustus Samarinda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="table table-boderles ">
                                <div class="row ms-2 mt-2">
                                    <div class="col-sm-2">
                                        <p>1998 – 2003</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: Ketua KSU Mayang Putri Prima</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p>2008 – 2013</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: Direktur PT. Cahaya Belawan Sejahtera</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p>2005 – 2013</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: Direktur CV. Sinto Makmur</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p>2014</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: Wakil Ketua DPRD Kabupaten Kutai Barat</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p>2014 – 2015</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: Ketua DPRD Kabupaten Mahakam Ulu</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p>2016 – 2021</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: Bupati Mahakam Ulu</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p>2021 – 2024</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: Bupati Mahakam Ulu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->endSection() ?>