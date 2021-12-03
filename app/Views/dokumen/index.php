<?= $this->extend('layouts/template_blog'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <section class="download">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12">
                <div class="list-download">
                    <div class="head-title">
                        <p>Download Dokumen</p>
                    </div>
                    <div class="row row-cols-1 row-cols-md-4 g-2">
                        <?php foreach ($kategori->getResultArray() as $k) : ?>
                            <div class="col">
                                <div class="card border-0 shadow-sm box-item-image">
                                    <a href="<?= base_url(); ?>/dokumen/download/<?= $k['slug']; ?>">
                                        <img src="<?= base_url(); ?>/assets/img/icon_kategori/<?= $k['icon_kategori']; ?>" class="card-img-top" alt="..." width="50">
                                        <div class="card-body">
                                            <p class="card-title text-center"><?= $k['nama_kategori']; ?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>