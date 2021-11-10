<?php $this->extend('layouts/template_blog') ?>

<?php $this->section('content') ?>
<div class="container my-5">
    <section class="pejabat">
        <div class="row">
            <?php foreach ($bupati as $b) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="col">
                            <h5 class="card text-white bg-transparent py-2 text-center mb-3" style="background-color: #748a53 !important;">PERIODE <?= $b['periode']; ?></h5>
                        </div>
                        <img data-src="<?= base_url(); ?>/assets/img/walikota/<?= $b['img']; ?>" class="lazyload card-img-top rounded-circle" alt="...">
                        <div class="card-body">
                            <h5 class="card-text name ">Bonifasius Belawan Geh, SH</h5>
                            <h5 class="text-center">Bupati Mahakam Ulu</h5>
                            <hr>
                            <p class="text-italic text-center"><span class="fw-bold">Motto</span><br><?= $b['motto']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="card">
                        <div class="row">
                            <div class="col">
                                <h5 class="card text-white bg-transparent py-2 fw-bold text-center mb-3" style="background-color: #748a53 !important;">BIOGRFAI BUPATI</h5>
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
                                            <p>: <?= $b['nama']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Agama</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $b['agama']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Tempat Tanggal Lahir</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $b['ttl']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Istri</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $b['istri']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Anak</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $b['anak1']; ?></p>
                                            <p>: <?= $b['anak2']; ?></p>
                                            <p>: <?= $b['anak3']; ?></p>
                                            <p>: <?= $b['anak4']; ?></p>
                                            <p>: <?= $b['anak5']; ?></p>
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
                                            <p>: <?= $b['sd']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Menengah</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $b['smp']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Lanjutan</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $b['sma']; ?></p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>Perguruan Tinggi</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $b['kuliah']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="table table-boderles ">
                                    <div class="row ms-2 mt-2">
                                        <div class="col-sm-2">
                                            <p><?= $b['tahun1']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $b['karir1']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $b['tahun2']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $b['karir2']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $b['tahun3']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $b['karir3']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $b['tahun4']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $b['karir4']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $b['tahun5']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $b['karir5']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $b['tahun6']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $b['karir6']; ?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p><?= $b['tahun7']; ?></p>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>: <?= $b['karir7']; ?></p>
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