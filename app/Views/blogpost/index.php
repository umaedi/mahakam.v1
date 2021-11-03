<?php $this->extend('layouts/template_blog') ?>

<?php $this->section('content') ?>
<div class="container my-5">
    <section class="agenda">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="navigation">
                    <p><i class="fas fa-h-square"></i><a href="<?= base_url(); ?>/"> Home</a> / <i class="fas fa-sm fa-hashtag"></i><?= $agenda['tag']; ?> / <?= $agenda['nama_agenda']; ?></p>
                </div>
                <div class="body-post">
                    <div class="img-post">
                        <img src="<?= base_url(); ?>/assets/img/blogpost/<?= $agenda['img']; ?>" width="100%">
                    </div>
                    <div class="post">
                        <?= $agenda['deskripsi']; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="recent-post">
                    <div class="head-title">
                        <p>AGENDA BERIKUTNYA</p>
                    </div>
                    <?php foreach ($getAgendaRecen as $ar) : ?>
                        <div class="card mb-3" style="max-width: 400px;">
                            <a href="<?= base_url(); ?>/agenda/p/<?= $ar['slug']; ?>">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <img src="<?= base_url(); ?>/assets/img/blogpost/agenda1_rev.jpg" class="img-fluid rounded-start" alt="..." width="80px">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="title-recent">
                                                <?= $ar['nama_agenda']; ?>
                                            </div>
                                            <p class="card-text fst-italic"><small class="text-muted"><?= $ar['tanggal']; ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->endSection() ?>