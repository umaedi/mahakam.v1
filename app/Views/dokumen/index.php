<?= $this->extend('layouts/template_blog'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <section class="download">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12">
                <div class="list-download">
                    <div class="head-title">
                        <p>Download Dokumen</p>
                    </div>
                    <table class="table table-responsive">
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
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>