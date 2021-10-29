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
                    <img data-src="<?= base_url(); ?><?= $img; ?>" class="lazyload card-img-top rounded-circle" alt="...">
                    <div class="card-body">
                        <h5 class="card-text name "><?= $nama; ?></h5>
                        <h5 class="text-center"><?= $jabatan; ?></h5>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-6">
                <div class="card">
                    <div class="row">
                        <div class="col">
                            <h5 class="card text-white bg-success py-2 fw-bold text-center mb-3"><?= $profil; ?></h5>
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
                                        <p>: <?= $nama; ?></p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Agama</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: <?= $agama; ?></p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Tempat Tanggal Lahir</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: <?= $ttl; ?></p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Istri</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: <?= $istri; ?></p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Anak</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: <?= $anak[0]; ?></p>
                                        <p>: <?= $anak[1]; ?></p>
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
                                        <p>: <?= $sd; ?></p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Menengah</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: <?= $smp; ?></p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Lanjutan</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: <?= $sma; ?></p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Perguruan Tinggi</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: <?= $kuliah; ?></p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Pasca</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p>: <?= $pasca; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="table table-boderles ">
                                <div class="row ms-2 mt-2">
                                    <div class="col-sm-2">
                                        <p><?= $karir1[0]; ?></p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: <?= $karir1[1]; ?></p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><?= $karir2[0]; ?></p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: <?= $karir2[1]; ?></p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><?= $karir3[0]; ?></p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: <?= $karir3[1]; ?></p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><?= $karir4[0]; ?></p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: <?= $karir4[1]; ?></p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><?= $karir5[0]; ?></p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: <?= $karir5[1]; ?></p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><?= $karir6[0]; ?></p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: <?= $karir6[1]; ?></p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><?= $karir7[0]; ?></p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>: <?= $karir7[1]; ?></p>
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