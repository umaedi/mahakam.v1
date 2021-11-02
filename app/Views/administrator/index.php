<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Agenda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">75</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Dokumen</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">120</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-pdf fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-gray-800">Agenda</h6>
                        <a href="<?= base_url(); ?>/administrator/buat_agenda" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Agenda</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Kunjungan Vaksinasi</td>
                                <td>29 Oct 2021</td>
                                <td><i class="far fa-eye"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Peresmian Gedung</td>
                                <td>03 Sep 2021</td>
                                <td><i class="far fa-eye"></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Kunjungan Kerja</td>
                                <td>13 Sep 2021</td>
                                <td><i class="far fa-eye"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-gray-800">Dokumen</h6>
                        <a href="<?= base_url(); ?>/administrator/dokumen" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Dokumen</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Laporan 1</td>
                                <td>29 Oct 2021</td>
                                <td><i class="far fa-eye"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Laporan 2</td>
                                <td>03 Sep 2021</td>
                                <td><i class="far fa-eye"></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Laporan 3</td>
                                <td>13 Sep 2021</td>
                                <td><i class="far fa-eye"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>