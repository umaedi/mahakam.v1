<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <form action="/administrator/update_wakil/<?= $wakil['id']; ?>" method="POST" enctype="multipart/form-data">
        <?php csrf_field() ?>
        <input type="hidden" name="id" value="<?= $wakil['id']; ?>">
        <input type="hidden" name="imgLama" value="<?= $wakil['img']; ?>">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Edit Biografi Wakil Bupati</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= $wakil['nama']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : ''; ?>" id="jabatan" name="jabatan" value="<?= $wakil['jabatan']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('jabatan'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="periode">Periode</label>
                            <input type="text" class="form-control <?= ($validation->hasError('periode')) ? 'is-invalid' : ''; ?>" id="periode" name="periode" value="<?= $wakil['periode']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('periode'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Ganti Foto Bupati</h6>
                    </div>
                    <img data-src="/assets/img/walikota/<?= $wakil['img']; ?>" class="lazyload img-thumbnail img-preview">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input <?= $validation->hasError('img') ? 'is-invalid' : ''; ?>" id="customFile" name="img" onchange="previewImg()">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('img'); ?>
                        </div>
                        <label class="custom-file-label" for="customFile">Pilih file</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Data Diri</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control <?= ($validation->hasError('agama')) ? 'is-invalid' : ''; ?>" id="ttl" name="agama" value="<?= $wakil['agama']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('agama'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ttl">Tempat Tanggal Lahir</label>
                            <input type="text" class="form-control <?= ($validation->hasError('ttl')) ? 'is-invalid' : ''; ?>" id="ttl" name="ttl" value="<?= $wakil['ttl']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('ttl'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="istri">Istri</label>
                            <input type="text" class="form-control <?= ($validation->hasError('istri')) ? 'is-invalid' : ''; ?>" id="istri" name="istri" value="<?= $wakil['istri']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('istri'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anak1">Anak Pertama</label>
                            <input type="text" class="form-control" id="anak1" name="anak1" value="<?= $wakil['anak1']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="anak2">Anak Kedua</label>
                            <input type="text" class="form-control" id="anak1" name="anak2" value="<?= $wakil['anak2']; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Riwayat Pendidikan</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="sd">Sekolah Dasar</label>
                            <input type="text" class="form-control <?= ($validation->hasError('sd')) ? 'is-invalid' : ''; ?>" id="sd" name="sd" value="<?= $wakil['sd']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('sd'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="smp">Menengah</label>
                            <input type="text" class="form-control <?= ($validation->hasError('smp')) ? 'is-invalid' : ''; ?>" id="smp" name="smp" value="<?= $wakil['smp']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('smp'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sma">Lanjutan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('sma')) ? 'is-invalid' : ''; ?>" id="sma" name="sma" value="<?= $wakil['sma']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('sma'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kuliah">Perguruan Tinggi</label>
                            <input type="text" class="form-control <?= ($validation->hasError('s1')) ? 'is-invalid' : ''; ?>" id="kuliah" name="s1" value="<?= $wakil['s1']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('s1'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kuliah">Perguruan Tinggi</label>
                            <input type="text" class="form-control <?= ($validation->hasError('s2')) ? 'is-invalid' : ''; ?>" id="kuliah" name="s2" value="<?= $wakil['s2']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('s2'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Perjalanan Karir</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tahun1">Tahun karir</label>
                                    <input type="text" class="form-control" id="tahun1" name="tahun1" value="<?= $wakil['tahun1']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="karir1">Karir</label>
                                    <input type="text" class="form-control" id="karir1" name="karir1" value="<?= $wakil['karir1']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tahun2">Tahun karir</label>
                                    <input type="text" class="form-control" id="tahun2" name="tahun2" value="<?= $wakil['tahun2']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="karir2">Karir</label>
                                    <input type="text" class="form-control" id="karir2" name="karir2" value="<?= $wakil['karir2']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tahun3">Tahun karir</label>
                                    <input type="text" class="form-control" id="tahun3" name="tahun3" value="<?= $wakil['tahun3']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="karir3">Karir</label>
                                    <input type="text" class="form-control" id="karir3" name="karir3" value="<?= $wakil['karir3']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tahun4">Tahun karir</label>
                                    <input type="text" class="form-control" id="tahun4" name="tahun4" value="<?= $wakil['tahun4']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="karir4">Karir</label>
                                    <input type="text" class="form-control" id="karir4" name="karir4" value="<?= $wakil['karir4']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tahun5">Tahun karir</label>
                                    <input type="text" class="form-control" id="tahun5" name="tahun5" value="<?= $wakil['tahun5']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="karir5">Karir</label>
                                    <input type="text" class="form-control" id="karir5" name="karir5" value="<?= $wakil['karir5']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tahun6">Tahun karir</label>
                                    <input type="text" class="form-control" id="tahun6" name="tahun6" value="<?= $wakil['tahun6']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="karir6">Karir</label>
                                    <input type="text" class="form-control" id="karir6" name="karir6" value="<?= $wakil['karir6']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tahun7">Tahun karir</label>
                                    <input type="text" class="form-control" id="tahun7" name="tahun7" value="<?= $wakil['tahun7']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="karir7">Karir</label>
                                    <input type="text" class="form-control" id="karir7" name="karir7" value="<?= $wakil['karir7']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-8 mt-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info"><i class="far fa-save"></i> Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>