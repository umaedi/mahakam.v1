<?php $this->extend('layouts/template_blog') ?>

<?php $this->section('content') ?>
<div class="container my-5">
    <section class="agenda">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="head-title">
                    <p>AGENDA TERBARU</p>
                </div>
                <?php foreach ($agenda as $a) : ?>
                    <div class="card mb-3" style="max-width: 800px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="img-beranda">
                                    <img src="<?= base_url(); ?>/assets/img/blogpost/<?= $a['img']; ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $a['nama_agenda']; ?></h5>
                                    <p class="card-text"><small class="text-muted"><span class="badge bg-warning text-dark"><?= $a['tag']; ?></span> / <i class="far fa-clock"></i> / <?= $a['tanggal']; ?></small></p>
                                    <p class="card-text"><small class="text-muted"><span class="badge bg-light text-dark">/ <i class="fas fa-map-marker-alt"></i> <?= $a['lokasi']; ?></small></p>
                                    <div class="deskripsi-blog">
                                        <?= $a['deskripsi']; ?>
                                    </div>
                                    <a href="<?= base_url(); ?>/agenda/p/<?= $a['slug']; ?>" type="submit" class="btn btn-sm btn-success  mt-3" style="background-color: #748a53 !important; border:none">Baca selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
                                        <img src="<?= base_url(); ?>/assets/img/blogpost/<?= $ar['img']; ?>" class="img-fluid rounded-start" alt="..." width="80px">
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
                    <div class="row">
                        <div id="kopi-covid"></div>
                        <script>
                            var f = document.createElement("iframe")
                            f.src = "https://kopi.dev/widget-covid-19/"
                            f.width = "100%"
                            f.height = 380
                            f.scrolling = "no"
                            f.frameBorder = 0
                            var rootEl = document.getElementById("kopi-covid")
                            console.log(rootEl)
                            rootEl.appendChild(f)
                        </script>
                    </div>
                </div>
            </div>
            <?= $pager->simpleLinks('agenda', 'agenda_pagination') ?>
        </div>
    </section>
</div>
<?php $this->endSection() ?>