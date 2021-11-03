<?= $this->extend('layouts/template_blog'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <section class="download">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="list-download">
                    <div class="head-title">
                        <p>Download Dokumen</p>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama file</th>
                                <th scope="col">Tanggal diupload</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($dokumen as $d) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $d['nama_file']; ?></td>
                                    <td><?= $d['tanggal']; ?></td>
                                    <td><a href="" class="btn btn-sm btn-custom"><i class="fas fa-cloud-download-alt"></i> Dwnload</a></td>
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