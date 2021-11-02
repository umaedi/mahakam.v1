<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <?= session()->getFlashdata('pesan'); ?>
        <?php foreach ($wakil as $b) : ?>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-center font-weight-bold text-info">PERIODE <?= $b['periode']; ?></h6>
                    </div>
                    <div class="card-body">
                        <img src="/assets/img/walikota/<?= $b['img']; ?>" width="100%" class="rounded-circle">
                    </div>
                    <h5 class="text-uppercase text-center px-2 font-weight-bold"><?= $b['nama']; ?></h5>
                    <h5 class="text-center"><?= $b['jabatan']; ?></h5>
                    <hr class="mx-auto" style="width: 50%;">
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-info">DATA DIRI</h6>
                            <a href="<?= base_url(); ?>/administrator/wakil/edit_wakil/<?= $b['id']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="far fa-edit text-white-50"></i> Edit Biografi</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-gray-800 active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DATA DIRI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-gray-800" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">RIWAYAT PENDIDIKAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-gray-800" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">KARIR</a>
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
                                            <p>T. Tanggal Lahir</p>
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
                                            <p>: <?= $b['s1']; ?></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>: <?= $b['s2']; ?></p>
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
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>