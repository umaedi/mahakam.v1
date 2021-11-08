<footer>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100">
        <div class="row justify-content-center mb-5">
            <div class="col">
                <h4 class="text-center">Alamat Kantor Sekretariat Kabinet Mahulu</h4>
                <hr class="garis-layanan">
                <div class="embed-responsive text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.295087728073!2d115.22688199999999!3d0.530123!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd90350b74562a2fa!2sKantor%20SETKAB%20Mahulu!5e0!3m2!1sid!2sid!4v1634525506843!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="main">
            <div class="item">
                <i class="fa fa-map-marker-alt"></i>
                <p>Jl. Poros Ujoh Bilang – Long Bagun Kabupaten Mahakam Ulu, Kalimantan Timur</p>
            </div>
            <a href="https://api.whatsapp.com/send/?phone=62816850103&text&app_absent=0">
                <div class="item">
                    <i class="fa fa-phone"></i>
                    <p>(+62) 85741492045</p>
                </div>
            </a>
            <a href="https://mail.google.com/mail/u/0/?tab=rm#inbox?compose=CllgCJlHmlWFwpjpSTjbKxdCKvcVrgQWpnKzJktJXRDhtFMwkDmXJJNXLFJrwFgRdkDTDrZNtkg">
                <div class="item">
                    <i class="fa fa-envelope"></i>
                    <p>info@mahakamulukab.go.id</p>
                </div>
            </a>
        </div>
    </div>
    <div class="copyright">
        <p class="mt-3">Copyright &copy; <span id="footer-cr-years"></span><?= date('Y'); ?> Mahakam | Developed by Newus</p>
    </div>
    <button id="back-to-top-btn"><i class="fas fa-angle-up"></i></button>
</footer>

<script>
    const backToTopButton = document.querySelector("#back-to-top-btn");

    window.addEventListener("scroll", scrollFunction);

    function scrollFunction() {
        if (window.pageYOffset > 300) { // Show backToTopButton
            if (!backToTopButton.classList.contains("btnEntrance")) {
                backToTopButton.classList.remove("btnExit");
                backToTopButton.classList.add("btnEntrance");
                backToTopButton.style.display = "block";
            }
        } else { // Hide backToTopButton
            if (backToTopButton.classList.contains("btnEntrance")) {
                backToTopButton.classList.remove("btnEntrance");
                backToTopButton.classList.add("btnExit");
                setTimeout(function() {
                    backToTopButton.style.display = "none";
                }, 250);
            }
        }
    }

    backToTopButton.addEventListener("click", smoothScrollBackToTop);

    // function backToTop() {
    //   window.scrollTo(0, 0);
    // }

    function smoothScrollBackToTop() {
        const targetPosition = 0;
        const startPosition = window.pageYOffset;
        const distance = targetPosition - startPosition;
        const duration = 10;
        let start = null;

        window.requestAnimationFrame(step);

        function step(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
            if (progress < duration) window.requestAnimationFrame(step);
        }
    }

    function easeInOutCubic(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t * t + b;
        t -= 2;
        return c / 2 * (t * t * t + 2) + b;
    };
</script>