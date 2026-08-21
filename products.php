<?php

$pageTitle = "Products | LabTurnkey";

include 'includes/header.php';

?>

<main>

    <!-- =====================================================
         PRODUCTS HERO
    ====================================================== -->

    <section class="products-hero">

        <div class="products-hero-grid"></div>

        <div class="products-hero-glow"></div>

        <div class="container products-hero-container">

            <div class="products-hero-content reveal">

                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    LABORATORY PRODUCTS
                </div>

                <h1>
                    Built For
                    <span>Better Laboratories.</span>
                </h1>

                <p>
                    Explore laboratory furniture, fume hoods, storage
                    systems, safety equipment and other products
                    designed for modern laboratory environments.
                </p>

                <div class="products-hero-buttons">

                    <a href="#products-catalog" class="hero-primary-btn">
                        Explore Products
                        <i class="fa-solid fa-arrow-down"></i>
                    </a>

                    <a href="contact.php" class="products-outline-btn">
                        Request a Quote
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- PRODUCT HERO VISUAL -->

            <div class="products-hero-visual reveal reveal-delay">

                <div class="product-showcase">

                    <div class="showcase-ring ring-one"></div>

                    <div class="showcase-ring ring-two"></div>

                    <div class="showcase-ring ring-three"></div>


                    <div class="showcase-product">

                        <div class="product-glass"></div>

                        <div class="product-top"></div>

                        <div class="product-body">

                            <div class="product-panel"></div>

                            <div class="product-handle"></div>

                        </div>

                        <div class="product-base"></div>

                    </div>


                    <div class="showcase-floating floating-one">

                        <i class="fa-solid fa-flask"></i>

                        <span>
                            Laboratory
                        </span>

                    </div>


                    <div class="showcase-floating floating-two">

                        <i class="fa-solid fa-shield-halved"></i>

                        <span>
                            Safety
                        </span>

                    </div>


                    <div class="showcase-floating floating-three">

                        <i class="fa-solid fa-gears"></i>

                        <span>
                            Quality
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         PRODUCT INTRO
    ====================================================== -->

    <section class="products-intro">

        <div class="container">

            <div class="products-heading reveal">

                <div>

                    <span class="section-label">
                        PRODUCT RANGE
                    </span>

                    <h2>
                        Laboratory Products
                        <span>For Every Requirement.</span>
                    </h2>

                </div>

                <p>
                    From everyday laboratory workstations to specialized
                    safety and ventilation systems, our product range
                    supports a wide variety of laboratory environments.
                </p>

            </div>


            <!-- =================================================
                 CATEGORY FILTER
            ================================================== -->

            <div class="product-filter reveal">

                <button
                    class="product-filter-btn active"
                    data-filter="all"
                >
                    All Products
                </button>

                <button
                    class="product-filter-btn"
                    data-filter="furniture"
                >
                    Furniture
                </button>

                <button
                    class="product-filter-btn"
                    data-filter="safety"
                >
                    Safety
                </button>

                <button
                    class="product-filter-btn"
                    data-filter="ventilation"
                >
                    Ventilation
                </button>

                <button
                    class="product-filter-btn"
                    data-filter="storage"
                >
                    Storage
                </button>

            </div>


            <!-- =================================================
                 PRODUCT GRID
            ================================================== -->

            <div
                class="products-grid"
                id="products-catalog"
            >


                <!-- PRODUCT 01 -->

                <article
                    class="product-card reveal"
                    data-category="furniture"
                >

                    <div class="product-image">

                        <div class="product-image-grid"></div>

                        <div class="mini-lab-bench">

                            <div class="mini-bench-top"></div>

                            <div class="mini-bench-leg"></div>

                            <div class="mini-bench-cabinet"></div>

                        </div>

                        <span class="product-tag">
                            FURNITURE
                        </span>

                    </div>


                    <div class="product-content">

                        <span class="product-category">
                            Laboratory Furniture
                        </span>

                        <h3>
                            Laboratory Work Benches
                        </h3>

                        <p>
                            Functional workstations designed for
                            laboratory workflows and daily use.
                        </p>

                        <a href="#work-benches" class="product-link">
                            View Product
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PRODUCT 02 -->

                <article
                    class="product-card reveal"
                    data-category="ventilation"
                >

                    <div class="product-image product-image-dark">

                        <div class="product-image-grid"></div>

                        <div class="mini-fume">

                            <div class="mini-fume-glass"></div>

                            <div class="mini-fume-top"></div>

                            <div class="mini-fume-base"></div>

                            <div class="mini-air air-a"></div>
                            <div class="mini-air air-b"></div>
                            <div class="mini-air air-c"></div>

                        </div>

                        <span class="product-tag">
                            VENTILATION
                        </span>

                    </div>


                    <div class="product-content">

                        <span class="product-category">
                            Ventilation
                        </span>

                        <h3>
                            Fume Hoods
                        </h3>

                        <p>
                            Controlled extraction solutions designed
                            for laboratory safety and containment.
                        </p>

                        <a href="#fume-hoods" class="product-link">
                            View Product
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PRODUCT 03 -->

                <article
                    class="product-card reveal"
                    data-category="storage"
                >

                    <div class="product-image">

                        <div class="product-image-grid"></div>

                        <div class="mini-storage">

                            <div class="storage-door door-left"></div>

                            <div class="storage-door door-right"></div>

                            <div class="storage-handle handle-left"></div>

                            <div class="storage-handle handle-right"></div>

                        </div>

                        <span class="product-tag">
                            STORAGE
                        </span>

                    </div>


                    <div class="product-content">

                        <span class="product-category">
                            Storage Systems
                        </span>

                        <h3>
                            Laboratory Storage Cabinets
                        </h3>

                        <p>
                            Practical storage solutions for equipment,
                            samples, chemicals and laboratory supplies.
                        </p>

                        <a href="#storage" class="product-link">
                            View Product
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PRODUCT 04 -->

                <article
                    class="product-card reveal"
                    data-category="safety"
                >

                    <div class="product-image product-image-safety">

                        <div class="safety-product-circle">

                            <i class="fa-solid fa-shower"></i>

                        </div>

                        <div class="safety-water water-one"></div>
                        <div class="safety-water water-two"></div>
                        <div class="safety-water water-three"></div>

                        <span class="product-tag">
                            SAFETY
                        </span>

                    </div>


                    <div class="product-content">

                        <span class="product-category">
                            Safety Equipment
                        </span>

                        <h3>
                            Emergency Shower Systems
                        </h3>

                        <p>
                            Laboratory emergency equipment designed
                            for rapid response and user protection.
                        </p>

                        <a href="#safety-products" class="product-link">
                            View Product
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PRODUCT 05 -->

                <article
                    class="product-card reveal"
                    data-category="furniture"
                >

                    <div class="product-image">

                        <div class="product-image-grid"></div>

                        <div class="mini-island">

                            <div class="island-top"></div>

                            <div class="island-leg island-leg-one"></div>
                            <div class="island-leg island-leg-two"></div>

                            <div class="island-cabinet"></div>

                        </div>

                        <span class="product-tag">
                            FURNITURE
                        </span>

                    </div>


                    <div class="product-content">

                        <span class="product-category">
                            Laboratory Furniture
                        </span>

                        <h3>
                            Island Workstations
                        </h3>

                        <p>
                            Central laboratory workstations designed
                            for collaborative workflows and accessibility.
                        </p>

                        <a href="#island-workstations" class="product-link">
                            View Product
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PRODUCT 06 -->

                <article
                    class="product-card reveal"
                    data-category="storage"
                >

                    <div class="product-image product-image-dark">

                        <div class="chemical-storage">

                            <div class="chemical-door">

                                <i class="fa-solid fa-flask"></i>

                            </div>

                            <div class="chemical-warning">
                                !
                            </div>

                        </div>

                        <span class="product-tag">
                            STORAGE
                        </span>

                    </div>


                    <div class="product-content">

                        <span class="product-category">
                            Chemical Storage
                        </span>

                        <h3>
                            Chemical Storage Cabinets
                        </h3>

                        <p>
                            Dedicated storage solutions designed around
                            laboratory chemical handling requirements.
                        </p>

                        <a href="#chemical-storage" class="product-link">
                            View Product
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PRODUCT 07 -->

                <article
                    class="product-card reveal"
                    data-category="furniture"
                >

                    <div class="product-image">

                        <div class="product-image-grid"></div>

                        <div class="mini-mobile-table">

                            <div class="mobile-top"></div>

                            <div class="mobile-wheel wheel-one"></div>
                            <div class="mobile-wheel wheel-two"></div>

                            <div class="mobile-shelf"></div>

                        </div>

                        <span class="product-tag">
                            FURNITURE
                        </span>

                    </div>


                    <div class="product-content">

                        <span class="product-category">
                            Laboratory Furniture
                        </span>

                        <h3>
                            Mobile Workstations
                        </h3>

                        <p>
                            Flexible mobile laboratory solutions for
                            changing workspace requirements.
                        </p>

                        <a href="#mobile-workstations" class="product-link">
                            View Product
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PRODUCT 08 -->

                <article
                    class="product-card reveal"
                    data-category="safety"
                >

                    <div class="product-image product-image-safety">

                        <div class="safety-shield-product">

                            <i class="fa-solid fa-shield-halved"></i>

                        </div>

                        <div class="safety-cross">
                            +
                        </div>

                        <span class="product-tag">
                            SAFETY
                        </span>

                    </div>


                    <div class="product-content">

                        <span class="product-category">
                            Safety Systems
                        </span>

                        <h3>
                            Laboratory Safety Equipment
                        </h3>

                        <p>
                            Safety-focused products supporting secure
                            and responsible laboratory operations.
                        </p>

                        <a href="#safety-products" class="product-link">
                            View Product
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- =====================================================
         PRODUCT DETAIL SECTIONS
    ====================================================== -->


    <!-- WORK BENCHES -->

    <section
        class="product-detail"
        id="work-benches"
    >

        <div class="container product-detail-grid">

            <div class="product-detail-visual reveal">

                <div class="large-product furniture-large">

                    <div class="large-bench-top"></div>

                    <div class="large-bench-leg leg-left"></div>

                    <div class="large-bench-leg leg-right"></div>

                    <div class="large-cabinet cabinet-left"></div>

                    <div class="large-cabinet cabinet-right"></div>

                    <div class="large-product-light"></div>

                </div>

            </div>


            <div class="product-detail-content reveal">

                <span class="section-label">
                    PRODUCT 01
                </span>

                <h2>
                    Laboratory
                    <span>Work Benches</span>
                </h2>

                <p>
                    Laboratory work benches provide the foundation for
                    everyday laboratory activities. They can be planned
                    around equipment, utilities, workflow and available
                    space.
                </p>

                <div class="product-detail-features">

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Durable work surfaces</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Integrated storage</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Utility integration</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Custom configurations</span>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- FUME HOODS -->

    <section
        class="product-detail product-detail-alt"
        id="fume-hoods"
    >

        <div class="container product-detail-grid">

            <div class="product-detail-content reveal">

                <span class="section-label">
                    PRODUCT 02
                </span>

                <h2>
                    Laboratory
                    <span>Fume Hoods</span>
                </h2>

                <p>
                    Fume hoods are designed to help contain and extract
                    potentially hazardous fumes and vapours generated
                    during laboratory processes.
                </p>

                <div class="product-detail-features">

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Fume containment</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Extraction integration</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Functional work area</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Laboratory safety</span>
                    </div>

                </div>

            </div>


            <div class="product-detail-visual reveal">

                <div class="large-product fume-large">

                    <div class="large-fume-top"></div>

                    <div class="large-fume-glass">

                        <div class="fume-flow flow-one"></div>
                        <div class="fume-flow flow-two"></div>
                        <div class="fume-flow flow-three"></div>

                    </div>

                    <div class="large-fume-worktop"></div>

                    <div class="large-fume-base"></div>

                </div>

            </div>

        </div>

    </section>


    <!-- STORAGE -->

    <section
        class="product-detail"
        id="storage"
    >

        <div class="container product-detail-grid">

            <div class="product-detail-visual reveal">

                <div class="large-product storage-large">

                    <div class="large-storage-door"></div>

                    <div class="large-storage-door second"></div>

                    <div class="storage-handle first"></div>

                    <div class="storage-handle second"></div>

                    <div class="storage-shelves">

                        <span></span>
                        <span></span>
                        <span></span>

                    </div>

                </div>

            </div>


            <div class="product-detail-content reveal">

                <span class="section-label">
                    PRODUCT 03
                </span>

                <h2>
                    Laboratory
                    <span>Storage Systems</span>
                </h2>

                <p>
                    Organised storage helps laboratories maintain
                    efficient workflows while protecting equipment,
                    samples and laboratory supplies.
                </p>

                <div class="product-detail-features">

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Storage cabinets</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Wall storage</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Equipment storage</span>
                    </div>

                    <div>
                        <i class="fa-solid fa-check"></i>
                        <span>Custom layouts</span>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         WHY OUR PRODUCTS
    ====================================================== -->

    <section class="products-benefits">

        <div class="container">

            <div class="products-heading reveal">

                <div>

                    <span class="section-label">
                        WHY LABTURNKEY
                    </span>

                    <h2>
                        Products Designed
                        <span>Around Your Laboratory.</span>
                    </h2>

                </div>

            </div>


            <div class="product-benefit-grid">

                <div class="product-benefit reveal">

                    <div class="benefit-icon">

                        <i class="fa-solid fa-ruler-combined"></i>

                    </div>

                    <h3>
                        Custom Planning
                    </h3>

                    <p>
                        Product selection and configuration can be
                        planned around your laboratory requirements.
                    </p>

                </div>


                <div class="product-benefit reveal">

                    <div class="benefit-icon">

                        <i class="fa-solid fa-layer-group"></i>

                    </div>

                    <h3>
                        Complete Range
                    </h3>

                    <p>
                        Furniture, safety, ventilation and storage
                        solutions under one project.
                    </p>

                </div>


                <div class="product-benefit reveal">

                    <div class="benefit-icon">

                        <i class="fa-solid fa-gears"></i>

                    </div>

                    <h3>
                        Project Integration
                    </h3>

                    <p>
                        Products can be coordinated with the wider
                        laboratory design and installation.
                    </p>

                </div>


                <div class="product-benefit reveal">

                    <div class="benefit-icon">

                        <i class="fa-solid fa-headset"></i>

                    </div>

                    <h3>
                        Project Support
                    </h3>

                    <p>
                        Our team can assist with product selection,
                        planning and project requirements.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         CTA
    ====================================================== -->

    <section class="products-cta">

        <div class="products-cta-glow"></div>

        <div class="container products-cta-content reveal">

            <span class="section-label light">
                NEED HELP CHOOSING?
            </span>

            <h2>
                Let's Find The Right
                <span>Products For Your Lab.</span>
            </h2>

            <p>
                Share your laboratory requirements with our team
                and we'll help you identify the right products
                and configuration.
            </p>

            <a
                href="contact.php"
                class="hero-primary-btn"
            >
                Request a Quote
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </section>

</main>


<!-- =====================================================
     PRODUCT FILTER + ANIMATION
====================================================== -->

<script>

document.addEventListener("DOMContentLoaded", function () {


    /* =========================================
       SCROLL REVEAL
    ========================================= */

    const revealElements =
        document.querySelectorAll(".reveal");

    const observer =
        new IntersectionObserver(
            function (entries, observer) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add(
                            "revealed"
                        );

                        observer.unobserve(
                            entry.target
                        );

                    }

                });

            },
            {
                threshold: 0.12
            }
        );


    revealElements.forEach(function (element) {

        observer.observe(element);

    });


    /* =========================================
       PRODUCT FILTER
    ========================================= */

    const filterButtons =
        document.querySelectorAll(
            ".product-filter-btn"
        );

    const products =
        document.querySelectorAll(
            ".product-card"
        );


    filterButtons.forEach(function (button) {

        button.addEventListener(
            "click",
            function () {

                const filter =
                    this.getAttribute(
                        "data-filter"
                    );


                filterButtons.forEach(
                    function (btn) {

                        btn.classList.remove(
                            "active"
                        );

                    }
                );


                this.classList.add("active");


                products.forEach(
                    function (product) {

                        const category =
                            product.getAttribute(
                                "data-category"
                            );


                        if (
                            filter === "all" ||
                            category === filter
                        ) {

                            product.style.display =
                                "flex";

                            setTimeout(
                                function () {

                                    product.style.opacity =
                                        "1";

                                    product.style.transform =
                                        "translateY(0)";

                                },
                                20
                            );

                        } else {

                            product.style.opacity =
                                "0";

                            product.style.transform =
                                "translateY(15px)";

                            setTimeout(
                                function () {

                                    product.style.display =
                                        "none";

                                },
                                250
                            );

                        }

                    }
                );

            }
        );

    });


    /* =========================================
       SMOOTH SCROLL
    ========================================= */

    document.querySelectorAll(
        'a[href^="#"]'
    ).forEach(function (anchor) {

        anchor.addEventListener(
            "click",
            function (e) {

                const target =
                    document.querySelector(
                        this.getAttribute("href")
                    );


                if (target) {

                    e.preventDefault();

                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });

                }

            }
        );

    });

});

</script>


<?php

include 'includes/footer.php';

?>