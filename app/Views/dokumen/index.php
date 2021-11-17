<?= $this->extend('layouts/template_blog'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <section class="download">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-sm-12">
                <div class="list-download">
                    <div class="head-title">
                        <p>Download Dokumen</p>
                    </div>
                    <div class="row row-cols-1 row-cols-md-4 g-2">
                        <div class="col">
                            <div class="card border-0 shadow-sm box-item-image">
                                <a href="">
                                    <img src="<?= base_url(); ?>/assets/img/icon/tes.jpg" class="card-img-top" alt="..." width="50">
                                    <div class="card-body">
                                        <p class="card-title text-center">Adm KD & DPRD</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 shadow-sm box-item-image">
                                <a href="">
                                    <img src="<?= base_url(); ?>/assets/img/icon/tes.jpg" class="card-img-top" alt="..." width="50">
                                    <div class="card-body">
                                        <p class="card-title text-center">LPPD</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 shadow-sm box-item-image">
                                <a href="">
                                    <img src="<?= base_url(); ?>/assets/img/icon/tes.jpg" class="card-img-top" alt="..." width="50">
                                    <div class="card-body">
                                        <p class="card-title text-center">RLPPD</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col ">
                            <div class="card border-0 shadow-sm box-item-image">
                                <a href="">
                                    <img src="<?= base_url(); ?>/assets/img/icon/tes.jpg" class="card-img-top" alt="..." width="50">
                                    <div class="card-body">
                                        <p class="card-title text-center">SPM</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama file</th>
                                <th scope="col" class="text-center">Tanggal diupload</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($dokumen as $d) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $d['nama_file']; ?></td>
                                    <td class="text-center"><?= $d['tanggal']; ?></td>
                                    <td><a href="<?= base_url(); ?>/dokumen/download_file/<?= $d['slug']; ?> " class="btn btn-sm btn-custom"><i class="fas fa-cloud-download-alt"></i> Dwnload</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table> -->
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>