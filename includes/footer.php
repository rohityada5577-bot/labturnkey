<!-- ================= FOOTER ================= -->

<footer class="site-footer">

    <!-- CTA SECTION -->

    <div class="footer-cta">

        <div class="footer-cta-glow"></div>

        <div class="footer-container footer-cta-content">

            <div>

                <span class="footer-eyebrow">
                    HAVE A PROJECT IN MIND?
                </span>

                <h2>
                    Let's Build Your
                    <span>Laboratory.</span>
                </h2>

                <p>
                    From concept and design to installation and commissioning,
                    we deliver complete laboratory solutions.
                </p>

            </div>

            <a href="contact.php" class="footer-cta-button">
                Discuss Your Project
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>


    <!-- MAIN FOOTER -->

    <div class="footer-main">

        <div class="footer-container footer-grid">


            <!-- COMPANY -->

            <div class="footer-company">

                <a href="index.php" class="footer-logo">

                    <div class="footer-logo-icon">
                        <i class="fa-solid fa-flask"></i>
                    </div>

                    <div>
                        <strong>
                            LAB<span>TURNKEY</span>
                        </strong>

                        <small>
                            LABORATORY SOLUTIONS
                        </small>
                    </div>

                </a>

                <p>
                    Delivering complete laboratory solutions through
                    innovative design, quality engineering and reliable
                    turnkey execution.
                </p>


                <!-- SOCIAL MEDIA -->

                <div class="footer-social">

                    <a href="#" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    <a href="#" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" aria-label="YouTube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>

                </div>

            </div>


            <!-- QUICK LINKS -->

            <div class="footer-column">

                <h3>Company</h3>

                <ul>

                    <li>
                        <a href="about.php">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="projects.php">
                            Our Projects
                        </a>
                    </li>

                    <li>
                        <a href="solutions.php">
                            Solutions
                        </a>
                    </li>

                    <li>
                        <a href="contact.php">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>


            <!-- SOLUTIONS -->

            <div class="footer-column">

                <h3>Solutions</h3>

                <ul>

                    <li>
                        <a href="solutions.php">
                            Laboratory Design
                        </a>
                    </li>

                    <li>
                        <a href="solutions.php">
                            Laboratory Furniture
                        </a>
                    </li>

                    <li>
                        <a href="solutions.php">
                            Fume Hoods
                        </a>
                    </li>

                    <li>
                        <a href="solutions.php">
                            Cleanrooms
                        </a>
                    </li>

                    <li>
                        <a href="solutions.php">
                            Installation
                        </a>
                    </li>

                </ul>

            </div>


            <!-- CONTACT -->

            <div class="footer-column footer-contact">

                <h3>Contact Us</h3>

                <div class="contact-item">

                    <div class="contact-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div>
                        <span>Address</span>
                        <p>
                            Mumbai, Maharashtra, India
                        </p>
                    </div>

                </div>


                <div class="contact-item">

                    <div class="contact-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>

                    <div>
                        <span>Phone</span>
                        <a href="tel:+919999999999">
                            +91 99999 99999
                        </a>
                    </div>

                </div>


                <div class="contact-item">

                    <div class="contact-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div>
                        <span>Email</span>
                        <a href="mailto:info@labturnkey.in">
                            info@labturnkey.in
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- BOTTOM FOOTER -->

    <div class="footer-bottom">

        <div class="footer-container footer-bottom-content">

            <p>
                © <?php echo date('Y'); ?>
                LabTurnkey. All Rights Reserved.
            </p>

            <div class="footer-bottom-links">

                <a href="#">
                    Privacy Policy
                </a>

                <a href="#">
                    Terms & Conditions
                </a>

            </div>

        </div>

    </div>

</footer>


<!-- BACK TO TOP -->

<button class="back-to-top" id="backToTop" aria-label="Back to top">

    <i class="fa-solid fa-arrow-up"></i>

</button>


<!-- ================= JAVASCRIPT ================= -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    const header = document.getElementById("siteHeader");

    const menuBtn = document.getElementById("mobileMenuBtn");

    const mobileNavigation =
        document.getElementById("mobileNavigation");

    const backToTop =
        document.getElementById("backToTop");


    /* ================= STICKY HEADER ================= */

    window.addEventListener("scroll", function () {

        if (window.scrollY > 30) {

            header.classList.add("scrolled");

        } else {

            header.classList.remove("scrolled");

        }


        /* Back to top */

        if (window.scrollY > 500) {

            backToTop.classList.add("show");

        } else {

            backToTop.classList.remove("show");

        }

    });


    /* ================= MOBILE MENU ================= */

    menuBtn.addEventListener("click", function () {

        menuBtn.classList.toggle("active");

        mobileNavigation.classList.toggle("open");

        document.body.classList.toggle("menu-open");

    });


    /* CLOSE MOBILE MENU */

    const mobileLinks =
        mobileNavigation.querySelectorAll("a");

    mobileLinks.forEach(function (link) {

        link.addEventListener("click", function () {

            menuBtn.classList.remove("active");

            mobileNavigation.classList.remove("open");

            document.body.classList.remove("menu-open");

        });

    });


    /* ================= BACK TO TOP ================= */

    backToTop.addEventListener("click", function () {

        window.scrollTo({

            top: 0,

            behavior: "smooth"

        });

    });

});

</script>

</body>
</html>