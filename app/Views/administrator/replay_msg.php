<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <?= session()->getFlashdata('pesan'); ?>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h5 class="h5 mb-0 text-gray-800">Pesan masuk</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama pengirim</label>
                        <input type="email" class="form-control" id="name" aria-describedby="emailHelp" value="<?= $contact['name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Email</label>
                        <input type="email" class="form-control" id="name" aria-describedby="emailHelp" value="<?= $contact['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Subjek</label>
                        <input type="email" class="form-control" id="name" aria-describedby="emailHelp" value="<?= $contact['subject']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"><?= $contact['msg']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h5 class="h5 mb-0 text-gray-800">Balas pesan</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="appbagianpem.mahulu@gmail.com" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Balasan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info">Kirim balasan <i class="far fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>