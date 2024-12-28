 <!-- footer start -->
    <footer class="footer overlay-top">
        <div class="container-fluid text-light  pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4 ">Company</h4>
                        <a class="btn btn-link" href="home.html"><i class="bi bi-chevron-right"></i> Home</a>
                        <a class="btn btn-link" href="about.html"><i class="bi bi-chevron-right"></i> About
                        </a>
                        <a class="btn btn-link" href="menu.html"><i class="bi bi-chevron-right"></i>
                            Franchise</a>
                        <a class="btn btn-link" href="Gallery.html"><i class="bi bi-chevron-right"></i> Gallery</a>
                        <a class="btn btn-link" href="contact.html"><i class="bi bi-chevron-right"></i>
                            Contact</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="bi bi-geo-alt me-3"></i></i>Vijaypur taluka sindagi
                            RD Patil College. 586128</p>
                        <p class="mb-2"><i class="bi bi-telephone me-3"></i>+9606504855 / 9008018983</p>
                        <p class="mb-2"><i class="bi bi-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2 gap-1">
                            <a class="btn btn-outline-light btn-social" href=""><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="bi bi-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-warning w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-warning py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            © <a class="border-bottom " href="#">Samajik Chaha</a>, All Right Reserved. Designed By <a
                                class="border-bottom" href="https://www.vertextechnosys.com/">vertextechnosys</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <script>var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1, // Default for desktop
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // When window width is <= 425px (mobile)
                425: {
                    slidesPerView: 3,
                },
            },
        });


        document.addEventListener("DOMContentLoaded", function () {
            const navbar = document.querySelector(".navbar");

            window.addEventListener("scroll", function () {
                if (window.scrollY > 50) { // Adjust scroll distance as needed
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            });
        });

        setInterval(function () {
            if (document.activeElement instanceof HTMLIFrameElement) {
                document.getElementById('cover').style.opacity = 0;
                document.getElementById('player').style.opacity = 1;
            }
        }, 50);
    </script>
</body>

</html>