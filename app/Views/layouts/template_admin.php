<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/assets/vendor/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
    <link rel="styleseeht" href="<?= base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/logo/favicon.png" type="image/x-icon">
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
</head>

<body id="page-top">
    <style>

    </style>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?= $this->include('layouts/sidebar'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?= $this->include('layouts/topbar'); ?>
                <!-- Begin Page Content -->
                <?= $this->renderSection('content'); ?>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <?= date('Y'); ?> Mahakam | Developed by News</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- LazyImg -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js" async=""></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/assets/vendor/js/sb-admin-2.min.js"></script>

    <!-- plugin clasic editor -->
    <script src="<?= base_url(); ?>/assets/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>

    <!-- plugin datatable -->
    <script src="<?= base_url(); ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $(function() {
            $('.btn-edit').on('click', function() {
                $('#tambahData').html('Edit dokumen');

                const id = $(this).data('id');
                const slug = $(this).data('slug');
                const nama = $(this).data('nama');
                const file = $(this).data('file');
                const tanggal = $(this).data('tanggal');

                $('form').attr('action', '<?= base_url(); ?>/administrator/update_dokumen/'.concat(id));
                $('.id').val(id);
                $('.slug').val(slug);
                $('.nama-file').val(nama);
                $('.file').val(file);
                $('.tanggal').val(tanggal);
            });
        });

        $(function() {
            $('.btn-edit-kategori').on('click', function() {
                $('#tambahKategori').html('Edit kategori');

                const id = $(this).data('id');
                const nama = $(this).data('nama');

                $('form').attr('action', '<?= base_url(); ?>/administrator/update_kategori/'.concat(id));
                $('.id').val(id);
                $('.namaKategori').val(nama);
            });
        });

        function previewImg() {
            const sampul = document.querySelector('#customFile');
            const sampulLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            //ganti url
            sampulLabel.textContent = sampul.files[0].name;

            //ganti preView
            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        function previewImg2() {
            const sampul = document.querySelector('#customFile2');
            const sampulLabel = document.querySelector('.label2');
            const imgPreview = document.querySelector('.img-preview2');

            //ganti url
            sampulLabel.textContent = sampul.files[0].name;

            //ganti preView
            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        function previewImg3() {
            const sampul = document.querySelector('#customFile3');
            const sampulLabel = document.querySelector('.label3');
            const imgPreview = document.querySelector('.img-preview3');

            //ganti url
            sampulLabel.textContent = sampul.files[0].name;

            //ganti preView
            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>

</body>

</html>