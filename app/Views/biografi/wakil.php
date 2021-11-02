<?php $this->extend('layouts/template1') ?>

<?php $this->section('content') ?>
<div class="container my-5">
    <section class="pejabat">
        <div class="row">
            <?php foreach ($wakil as $w) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="col">
                            <h5 class="card text-white bg-transparent py-2 text-center mb-3" style="background-color: #748a53 !important;">PERIODE 2021-2024</h5>
                        </div>
                        <img data-src="<?= base_url(); ?>/assets/img/walikota/<?= $w['img']; ?>" class="lazyload card-img-top rounded-circle" alt="...">
                        <div class="card-body">
                            <h5 class="card-text name "><?= $w['nama']; ?></h5>
                            <h5 class="text-center"><?= $w['jabatan']; ?></h5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="card">
                        <div class="row">
                            <div class="col">
                                <h5 class="card text-white bg-transparent py-2 fw-bold text-center mb-3" style="background-color: #748a53 !important;">BIOGRAFI WAKIL BUPATI</h5>
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
                                            <p>: <?= $w['nama']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Agama</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $w['agama']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Tempat Tanggal Lahir</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $w['ttl']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Istri</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $w['istri']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Anak</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $w['anak1']; ?></p>
                                            <p>: <?= $w['anak2']; ?></p>
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
                                            <p>: <?= $w['sd']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Menengah</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $w['smp']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Lanjutan</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $w['sma']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Perguruan Tinggi</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $w['s1']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Pasca</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $w['s2']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="table table-boderles ">
                                    <div class="row ms-2 mt-2">
                                        <div class="col-sm-2">
                                            <p><?= $w['tahun1']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $w['karir1']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $w['tahun2']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $w['karir2']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $w['tahun3']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $w['karir3']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $w['tahun4']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $w['karir4']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $w['tahun5']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $w['karir5']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $w['tahun6']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $w['karir6']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $w['tahun7']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $w['karir7']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>
<?php $this->endSection() ?>