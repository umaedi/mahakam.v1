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
                        <img data-src="<?= base_url(); ?>/assets/img/blogpost/<?= $agenda['img']; ?>" class="lazyload" width="100%">
                    </div>
                    <div class="post">
                        <?= $agenda['deskripsi']; ?>
                    </div>
                </div>
                <b:includable id='postsharebutton'>
                    <div id='share-container'>
                        <!-- social sharing button -->
                        <p class='share-this-pleaseeeee'>
                            <data:messages.share />
                        </p>
                        <div id='share'>
                            <!-- facebook -->
                            <a href="https://www.facebook.com/sharer.php?u=<?= base_url(); ?>/agenda/p/<?= $agenda['slug']; ?>" aria-label='facebook' class='facebook' target='_blank' title='facebook'>
                                <svg viewBox='0 0 24 24'>
                                    <path d='M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z' />
                                </svg>
                            </a>
                            <!-- twitter -->
                            <a href="https://twitter.com/intent/tweet?text=<?= base_url(); ?>/agenda/p/<?= $agenda['slug']; ?>" aria-label='twitter' class='twitter' rel='nofollow noreferrer' target='_blank' title='twitter'>
                                <svg viewBox='0 0 24 24'>
                                    <path d='M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z' />
                                </svg>
                            </a>
                            <a href="https://pinterest.com/pin/create/button/?url=<?= base_url(); ?>/agenda/p/<?= $agenda['slug']; ?>" aria-label='pinterest' class='pinterest' rel='nofollow noreferrer' target='_blank' title='pinterest'>
                                <svg viewBox='0 0 24 24'>
                                    <path d='M9.04,21.54C10,21.83 10.97,22 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12C2,16.25 4.67,19.9 8.44,21.34C8.35,20.56 8.26,19.27 8.44,18.38L9.59,13.44C9.59,13.44 9.3,12.86 9.3,11.94C9.3,10.56 10.16,9.53 11.14,9.53C12,9.53 12.4,10.16 12.4,10.97C12.4,11.83 11.83,13.06 11.54,14.24C11.37,15.22 12.06,16.08 13.06,16.08C14.84,16.08 16.22,14.18 16.22,11.5C16.22,9.1 14.5,7.46 12.03,7.46C9.21,7.46 7.55,9.56 7.55,11.77C7.55,12.63 7.83,13.5 8.29,14.07C8.38,14.13 8.38,14.21 8.35,14.36L8.06,15.45C8.06,15.62 7.95,15.68 7.78,15.56C6.5,15 5.76,13.18 5.76,11.71C5.76,8.55 8,5.68 12.32,5.68C15.76,5.68 18.44,8.15 18.44,11.43C18.44,14.87 16.31,17.63 13.26,17.63C12.29,17.63 11.34,17.11 11,16.5L10.33,18.87C10.1,19.73 9.47,20.88 9.04,21.57V21.54Z' />
                                </svg>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=&amp;text=<?= base_url(); ?>/agenda/p/<?= $agenda['slug']; ?>" aria-label='whatsapp' class='whatsapp' expr:href='&quot; target=' _blank' title='whatsapp'>
                                <svg viewBox='0 0 24 24'>
                                    <path d='M16.75,13.96C17,14.09 17.16,14.16 17.21,14.26C17.27,14.37 17.25,14.87 17,15.44C16.8,16 15.76,16.54 15.3,16.56C14.84,16.58 14.83,16.92 12.34,15.83C9.85,14.74 8.35,12.08 8.23,11.91C8.11,11.74 7.27,10.53 7.31,9.3C7.36,8.08 8,7.5 8.26,7.26C8.5,7 8.77,6.97 8.94,7H9.41C9.56,7 9.77,6.94 9.96,7.45L10.65,9.32C10.71,9.45 10.75,9.6 10.66,9.76L10.39,10.17L10,10.59C9.88,10.71 9.74,10.84 9.88,11.09C10,11.35 10.5,12.18 11.2,12.87C12.11,13.75 12.91,14.04 13.15,14.17C13.39,14.31 13.54,14.29 13.69,14.13L14.5,13.19C14.69,12.94 14.85,13 15.08,13.08L16.75,13.96M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C10.03,22 8.2,21.43 6.65,20.45L2,22L3.55,17.35C2.57,15.8 2,13.97 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12C4,13.72 4.54,15.31 5.46,16.61L4.5,19.5L7.39,18.54C8.69,19.46 10.28,20 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z' />
                                </svg>
                            </a>
                        </div>
                    </div> <!-- social sharing button end -->
                </b:includable>
                <div class="row row-cols-2 mb-3 row-cols-md-2 row-cols-sm-2 g-4">
                    <?php foreach ($getAgendaRecen as $a) : ?>
                        <div class="col">
                            <a href="<?= base_url(); ?>/agenda/p/<?= $a['slug']; ?>" style="color: #222;">
                                <div class="card border-0">
                                    <div class="img-beranda">
                                        <img data-src="<?= base_url(); ?>/assets/img/blogpost/<?= $a['img']; ?>" class="lazyload card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $a['nama_agenda']; ?></h5>
                                        <div class="deskripsi-blog">
                                            <?= $a['deskripsi']; ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="recent-post">
                    <div class="head-title">
                        <p>AGENDA BERIKUTNYA</p>
                    </div>
                    <div class="card mb-3 border-0" style="max-width: 400px;">
                        <?php foreach ($getAgendaRecen as $ar) : ?>
                            <a href="<?= base_url(); ?>/agenda/p/<?= $ar['slug']; ?>">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <div class="img-berikutnya">
                                            <img data-src="<?= base_url(); ?>/assets/img/blogpost/<?= $ar['img']; ?>" class="lazyload img-fluid rounded-start" alt="..." width="80px">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="title-recent">
                                                <?= $ar['nama_agenda']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->endSection() ?>