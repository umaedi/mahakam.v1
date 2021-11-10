<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <?php foreach ($banner as $b) : ?>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url(); ?>/assets/img/banner/<?= $b['img_banner']; ?>" loading="lazy" class="d-block w-100 lazyload" alt="...">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 com-sm-12">
                    <div class="bupati">
                        <a href="<?= base_url(); ?>/biografi/bupati">
                            <img src="<?= base_url(); ?>/assets/img/banner/<?= $b['bupati']; ?>" loading="lazy" class="lazyload">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 com-sm-12">
                    <div class="wakil-bupati">
                        <a href="<?= base_url(); ?>/biografi/wakil">
                            <img src=" <?= base_url(); ?>/assets/img/banner/<?= $b['wakil']; ?>" loading="lazy" class="lazyload">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($settings as $s) : ?>
        <div class="st2-slide-content">
            <div class="aso" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="st2-slide-title"><?= $s['welcome_msg']; ?></h3>
                <p><span class="sub-welcome fw-bold"><?= $s['slogan']; ?></span>
                <p class="minor-sub mt-4"><?= $s['addres']; ?><br><?= $s['contact']; ?></p>
            </div>
            <div class="arrow mt-5">
                <a href="#layanan"><i class="fas fa-2x fa-angle-double-down" style="color:#fff"></i></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>