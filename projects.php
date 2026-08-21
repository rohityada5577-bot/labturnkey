<?php

$pageTitle = "Projects | LabTurnkey";

include 'includes/header.php';

?>

<main>

    <!-- =====================================================
         PROJECT HERO
    ====================================================== -->

    <section class="projects-hero">

        <div class="projects-hero-grid"></div>

        <div class="projects-hero-orb"></div>

        <div class="container projects-hero-container">

            <div class="projects-hero-content reveal">

                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    OUR PROJECTS
                </div>

                <h1>
                    Laboratories
                    <span>Built With Purpose.</span>
                </h1>

                <p>
                    From concept and planning to installation and
                    handover, we deliver laboratory environments
                    designed around performance, safety and workflow.
                </p>

                <div class="projects-hero-buttons">

                    <a href="#project-catalog" class="hero-primary-btn">
                        Explore Projects
                        <i class="fa-solid fa-arrow-down"></i>
                    </a>

                    <a href="contact.php" class="projects-outline-btn">
                        Start Your Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- HERO VISUAL -->

            <div class="projects-hero-visual reveal reveal-delay">

                <div class="project-blueprint">

                    <div class="blueprint-grid"></div>

                    <div class="blueprint-room room-one">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="blueprint-room room-two">
                        <span></span>
                        <span></span>
                    </div>

                    <div class="blueprint-room room-three">
                        <span></span>
                    </div>

                    <div class="blueprint-line line-one"></div>
                    <div class="blueprint-line line-two"></div>
                    <div class="blueprint-line line-three"></div>

                    <div class="blueprint-center">

                        <i class="fa-solid fa-flask"></i>

                    </div>

                    <div class="blueprint-label label-one">
                        LAB
                    </div>

                    <div class="blueprint-label label-two">
                        R&D
                    </div>

                    <div class="blueprint-label label-three">
                        QA
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         PROJECT STATS
    ====================================================== -->

    <section class="project-stats">

        <div class="container">

            <div class="project-stat-grid">

                <div class="project-stat reveal">

                    <strong>
                        50+
                    </strong>

                    <span>
                        Projects Delivered
                    </span>

                </div>

                <div class="project-stat reveal">

                    <strong>
                        15+
                    </strong>

                    <span>
                        Industries Served
                    </span>

                </div>

                <div class="project-stat reveal">

                    <strong>
                        100%
                    </strong>

                    <span>
                        Turnkey Approach
                    </span>

                </div>

                <div class="project-stat reveal">

                    <strong>
                        PAN
                    </strong>

                    <span>
                        India Project Support
                    </span>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         PROJECT CATALOG
    ====================================================== -->

    <section
        class="project-catalog"
        id="project-catalog"
    >

        <div class="container">

            <div class="projects-heading reveal">

                <div>

                    <span class="section-label">
                        PROJECT PORTFOLIO
                    </span>

                    <h2>
                        Spaces We've
                        <span>Helped Create.</span>
                    </h2>

                </div>

                <p>
                    Every laboratory has different workflows,
                    equipment requirements and safety considerations.
                    Our projects are planned around those unique needs.
                </p>

            </div>


            <!-- FILTER -->

            <div class="project-filter reveal">

                <button
                    class="project-filter-btn active"
                    data-project-filter="all"
                >
                    All Projects
                </button>

                <button
                    class="project-filter-btn"
                    data-project-filter="pharma"
                >
                    Pharmaceutical
                </button>

                <button
                    class="project-filter-btn"
                    data-project-filter="research"
                >
                    Research & R&D
                </button>

                <button
                    class="project-filter-btn"
                    data-project-filter="education"
                >
                    Education
                </button>

                <button
                    class="project-filter-btn"
                    data-project-filter="healthcare"
                >
                    Healthcare
                </button>

            </div>


            <!-- PROJECT GRID -->

            <div class="projects-grid">


                <!-- PROJECT 01 -->

                <article
                    class="project-card reveal"
                    data-project-category="pharma"
                >

                    <div class="project-card-image">

                        <div class="project-card-grid"></div>

                        <div class="project-lab-scene">

                            <div class="scene-bench"></div>

                            <div class="scene-cabinet"></div>

                            <div class="scene-machine"></div>

                            <div class="scene-light"></div>

                        </div>

                        <div class="project-number">
                            01
                        </div>

                        <div class="project-type">
                            PHARMACEUTICAL
                        </div>

                        <div class="project-image-overlay"></div>

                    </div>


                    <div class="project-card-content">

                        <span>
                            PHARMACEUTICAL
                        </span>

                        <h3>
                            Pharmaceutical R&D Laboratory
                        </h3>

                        <p>
                            Research-focused laboratory environment
                            planned for pharmaceutical development
                            and analytical workflows.
                        </p>

                        <div class="project-meta">

                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                India
                            </div>

                            <div>
                                <i class="fa-solid fa-flask"></i>
                                R&D
                            </div>

                        </div>

                        <a
                            href="#pharma-project"
                            class="project-view"
                        >
                            View Project
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 02 -->

                <article
                    class="project-card reveal"
                    data-project-category="research"
                >

                    <div class="project-card-image project-image-dark">

                        <div class="project-card-grid"></div>

                        <div class="research-scene">

                            <div class="research-table"></div>

                            <div class="research-screen"></div>

                            <div class="research-device"></div>

                            <div class="research-glow"></div>

                        </div>

                        <div class="project-number">
                            02
                        </div>

                        <div class="project-type">
                            R&D
                        </div>

                        <div class="project-image-overlay"></div>

                    </div>


                    <div class="project-card-content">

                        <span>
                            RESEARCH & DEVELOPMENT
                        </span>

                        <h3>
                            Advanced Research Laboratory
                        </h3>

                        <p>
                            Modern R&D workspace designed around
                            collaborative research and equipment access.
                        </p>

                        <div class="project-meta">

                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                India
                            </div>

                            <div>
                                <i class="fa-solid fa-microscope"></i>
                                Research
                            </div>

                        </div>

                        <a
                            href="#research-project"
                            class="project-view"
                        >
                            View Project
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 03 -->

                <article
                    class="project-card reveal"
                    data-project-category="education"
                >

                    <div class="project-card-image">

                        <div class="project-card-grid"></div>

                        <div class="education-scene">

                            <div class="education-bench"></div>

                            <div class="education-stool stool-one"></div>

                            <div class="education-stool stool-two"></div>

                            <div class="education-board"></div>

                        </div>

                        <div class="project-number">
                            03
                        </div>

                        <div class="project-type">
                            EDUCATION
                        </div>

                        <div class="project-image-overlay"></div>

                    </div>


                    <div class="project-card-content">

                        <span>
                            EDUCATION
                        </span>

                        <h3>
                            University Teaching Laboratory
                        </h3>

                        <p>
                            Student-focused laboratory environment
                            created for practical learning and demonstrations.
                        </p>

                        <div class="project-meta">

                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                India
                            </div>

                            <div>
                                <i class="fa-solid fa-graduation-cap"></i>
                                Education
                            </div>

                        </div>

                        <a
                            href="#education-project"
                            class="project-view"
                        >
                            View Project
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 04 -->

                <article
                    class="project-card reveal"
                    data-project-category="healthcare"
                >

                    <div class="project-card-image project-image-light">

                        <div class="project-card-grid"></div>

                        <div class="healthcare-scene">

                            <div class="healthcare-counter"></div>

                            <div class="healthcare-device"></div>

                            <div class="healthcare-monitor"></div>

                            <div class="healthcare-cross">
                                +
                            </div>

                        </div>

                        <div class="project-number">
                            04
                        </div>

                        <div class="project-type">
                            HEALTHCARE
                        </div>

                        <div class="project-image-overlay"></div>

                    </div>


                    <div class="project-card-content">

                        <span>
                            HEALTHCARE
                        </span>

                        <h3>
                            Diagnostic Laboratory
                        </h3>

                        <p>
                            Efficient diagnostic laboratory planned
                            around workflow, hygiene and operational safety.
                        </p>

                        <div class="project-meta">

                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                India
                            </div>

                            <div>
                                <i class="fa-solid fa-hospital"></i>
                                Healthcare
                            </div>

                        </div>

                        <a
                            href="#healthcare-project"
                            class="project-view"
                        >
                            View Project
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 05 -->

                <article
                    class="project-card reveal"
                    data-project-category="pharma"
                >

                    <div class="project-card-image project-image-dark">

                        <div class="project-card-grid"></div>

                        <div class="quality-scene">

                            <div class="quality-hood"></div>

                            <div class="quality-table"></div>

                            <div class="quality-machine"></div>

                            <div class="quality-air"></div>

                        </div>

                        <div class="project-number">
                            05
                        </div>

                        <div class="project-type">
                            QUALITY CONTROL
                        </div>

                        <div class="project-image-overlay"></div>

                    </div>


                    <div class="project-card-content">

                        <span>
                            PHARMACEUTICAL
                        </span>

                        <h3>
                            Quality Control Laboratory
                        </h3>

                        <p>
                            Functional QC environment designed to
                            support analytical testing and controlled workflows.
                        </p>

                        <div class="project-meta">

                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                India
                            </div>

                            <div>
                                <i class="fa-solid fa-vial"></i>
                                QC
                            </div>

                        </div>

                        <a
                            href="#qc-project"
                            class="project-view"
                        >
                            View Project
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 06 -->

                <article
                    class="project-card reveal"
                    data-project-category="research"
                >

                    <div class="project-card-image">

                        <div class="project-card-grid"></div>

                        <div class="biotech-scene">

                            <div class="biotech-bench"></div>

                            <div class="biotech-tube tube-one"></div>

                            <div class="biotech-tube tube-two"></div>

                            <div class="biotech-tube tube-three"></div>

                            <div class="biotech-light"></div>

                        </div>

                        <div class="project-number">
                            06
                        </div>

                        <div class="project-type">
                            BIOTECH
                        </div>

                        <div class="project-image-overlay"></div>

                    </div>


                    <div class="project-card-content">

                        <span>
                            RESEARCH & DEVELOPMENT
                        </span>

                        <h3>
                            Biotechnology Laboratory
                        </h3>

                        <p>
                            Specialized laboratory planning supporting
                            biotechnology research and experimental work.
                        </p>

                        <div class="project-meta">

                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                India
                            </div>

                            <div>
                                <i class="fa-solid fa-dna"></i>
                                Biotech
                            </div>

                        </div>

                        <a
                            href="#biotech-project"
                            class="project-view"
                        >
                            View Project
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 07 -->

                <article
                    class="project-card reveal"
                    data-project-category="education"
                >

                    <div class="project-card-image">

                        <div class="project-card-grid"></div>

                        <div class="chemistry-scene">

                            <div class="chemistry-bench"></div>

                            <div class="chemistry-flask flask-one"></div>

                            <div class="chemistry-flask flask-two"></div>

                            <div class="chemistry-burner"></div>

                        </div>

                        <div class="project-number">
                            07
                        </div>

                        <div class="project-type">
                            CHEMISTRY
                        </div>

                        <div class="project-image-overlay"></div>

                    </div>


                    <div class="project-card-content">

                        <span>
                            EDUCATION
                        </span>

                        <h3>
                            Chemistry Teaching Laboratory
                        </h3>

                        <p>
                            Practical chemistry laboratory designed
                            for safe student experimentation and learning.
                        </p>

                        <div class="project-meta">

                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                India
                            </div>

                            <div>
                                <i class="fa-solid fa-atom"></i>
                                Chemistry
                            </div>

                        </div>

                        <a
                            href="#chemistry-project"
                            class="project-view"
                        >
                            View Project
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 08 -->

                <article
                    class="project-card reveal"
                    data-project-category="healthcare"
                >

                    <div class="project-card-image project-image-dark">

                        <div class="project-card-grid"></div>

                        <div class="microbiology-scene">

                            <div class="micro-counter"></div>

                            <div class="micro-device"></div>

                            <div class="micro-screen"></div>

                            <div class="micro-glow"></div>

                        </div>

                        <div class="project-number">
                            08
                        </div>

                        <div class="project-type">
                            MICROBIOLOGY
                        </div>

                        <div class="project-image-overlay"></div>

                    </div>


                    <div class="project-card-content">

                        <span>
                            HEALTHCARE
                        </span>

                        <h3>
                            Microbiology Laboratory
                        </h3>

                        <p>
                            Laboratory environment structured around
                            controlled workflows and specialized equipment.
                        </p>

                        <div class="project-meta">

                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                India
                            </div>

                            <div>
                                <i class="fa-solid fa-microscope"></i>
                                Microbiology
                            </div>

                        </div>

                        <a
                            href="#microbiology-project"
                            class="project-view"
                        >
                            View Project
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- =====================================================
         FEATURED PROJECT
    ====================================================== -->

    <section
        class="featured-project"
        id="pharma-project"
    >

        <div class="container featured-project-grid">

            <div class="featured-project-visual reveal">

                <div class="featured-lab">

                    <div class="featured-ceiling"></div>

                    <div class="featured-wall wall-one"></div>

                    <div class="featured-wall wall-two"></div>

                    <div class="featured-bench"></div>

                    <div class="featured-fume"></div>

                    <div class="featured-cabinet"></div>

                    <div class="featured-floor"></div>

                    <div class="featured-light"></div>

                </div>

            </div>


            <div class="featured-project-content reveal">

                <span class="section-label">
                    FEATURED PROJECT
                </span>

                <h2>
                    Pharmaceutical
                    <span>R&D Facility</span>
                </h2>

                <p>
                    A modern laboratory environment planned around
                    research workflows, equipment positioning,
                    laboratory furniture and safety requirements.
                </p>


                <div class="featured-project-info">

                    <div>

                        <small>
                            PROJECT TYPE
                        </small>

                        <strong>
                            R&D Laboratory
                        </strong>

                    </div>

                    <div>

                        <small>
                            SCOPE
                        </small>

                        <strong>
                            Turnkey
                        </strong>

                    </div>

                    <div>

                        <small>
                            INDUSTRY
                        </small>

                        <strong>
                            Pharmaceutical
                        </strong>

                    </div>

                    <div>

                        <small>
                            DELIVERY
                        </small>

                        <strong>
                            Design → Handover
                        </strong>

                    </div>

                </div>


                <a
                    href="contact.php"
                    class="hero-primary-btn"
                >
                    Discuss Similar Project
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </section>


    <!-- =====================================================
         INDUSTRIES
    ====================================================== -->

    <section class="project-industries">

        <div class="container">

            <div class="projects-heading reveal">

                <div>

                    <span class="section-label">
                        INDUSTRIES
                    </span>

                    <h2>
                        Laboratory Solutions
                        <span>Across Industries.</span>
                    </h2>

                </div>

            </div>


            <div class="industry-project-grid">

                <div class="industry-project-card reveal">

                    <i class="fa-solid fa-pills"></i>

                    <h3>
                        Pharmaceutical
                    </h3>

                    <p>
                        R&D, QC, analytical and production support laboratories.
                    </p>

                </div>


                <div class="industry-project-card reveal">

                    <i class="fa-solid fa-dna"></i>

                    <h3>
                        Biotechnology
                    </h3>

                    <p>
                        Research environments for biotechnology applications.
                    </p>

                </div>


                <div class="industry-project-card reveal">

                    <i class="fa-solid fa-hospital"></i>

                    <h3>
                        Healthcare
                    </h3>

                    <p>
                        Diagnostic, pathology and healthcare laboratories.
                    </p>

                </div>


                <div class="industry-project-card reveal">

                    <i class="fa-solid fa-graduation-cap"></i>

                    <h3>
                        Education
                    </h3>

                    <p>
                        Teaching and practical learning laboratories.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         TURNKEY PROCESS
    ====================================================== -->

    <section class="project-process">

        <div class="container">

            <div class="projects-heading reveal">

                <div>

                    <span class="section-label">
                        OUR PROCESS
                    </span>

                    <h2>
                        From Empty Space
                        <span>To Working Laboratory.</span>
                    </h2>

                </div>

                <p>
                    Our turnkey approach connects planning, design,
                    products, installation and final handover.
                </p>

            </div>


            <div class="process-project-grid">

                <div class="process-project-item reveal">

                    <span>
                        01
                    </span>

                    <div>

                        <i class="fa-solid fa-comments"></i>

                        <h3>
                            Consultation
                        </h3>

                        <p>
                            Understand your laboratory requirements,
                            workflow and objectives.
                        </p>

                    </div>

                </div>


                <div class="process-project-item reveal">

                    <span>
                        02
                    </span>

                    <div>

                        <i class="fa-solid fa-compass-drafting"></i>

                        <h3>
                            Planning & Design
                        </h3>

                        <p>
                            Develop laboratory layouts, planning and
                            product configurations.
                        </p>

                    </div>

                </div>


                <div class="process-project-item reveal">

                    <span>
                        03
                    </span>

                    <div>

                        <i class="fa-solid fa-industry"></i>

                        <h3>
                            Manufacturing
                        </h3>

                        <p>
                            Coordinate the required laboratory
                            furniture and products.
                        </p>

                    </div>

                </div>


                <div class="process-project-item reveal">

                    <span>
                        04
                    </span>

                    <div>

                        <i class="fa-solid fa-screwdriver-wrench"></i>

                        <h3>
                            Installation
                        </h3>

                        <p>
                            Execute installation and coordinate
                            laboratory systems on site.
                        </p>

                    </div>

                </div>


                <div class="process-project-item reveal">

                    <span>
                        05
                    </span>

                    <div>

                        <i class="fa-solid fa-circle-check"></i>

                        <h3>
                            Handover
                        </h3>

                        <p>
                            Complete final checks and hand over
                            the finished laboratory environment.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         CTA
    ====================================================== -->

    <section class="projects-cta">

        <div class="projects-cta-orb"></div>

        <div class="container projects-cta-content reveal">

            <span class="section-label light">
                HAVE A PROJECT IN MIND?
            </span>

            <h2>
                Let's Build Your
                <span>Next Laboratory.</span>
            </h2>

            <p>
                Tell us about your space, requirements and project
                goals. Our team can help take it from concept to completion.
            </p>

            <div class="projects-cta-buttons">

                <a
                    href="contact.php"
                    class="hero-primary-btn"
                >
                    Start Your Project
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a
                    href="solutions.php"
                    class="projects-cta-link"
                >
                    Explore Solutions
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </section>

</main>


<!-- =====================================================
     PROJECT JAVASCRIPT
===================================================== -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    /* =========================================
       SCROLL REVEAL
    ========================================= */

    const revealElements =
        document.querySelectorAll(".reveal");

    const revealObserver =
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

        revealObserver.observe(element);

    });


    /* =========================================
       PROJECT FILTER
    ========================================= */

    const filterButtons =
        document.querySelectorAll(
            ".project-filter-btn"
        );

    const projectCards =
        document.querySelectorAll(
            ".project-card"
        );


    filterButtons.forEach(function (button) {

        button.addEventListener(
            "click",
            function () {

                const filter =
                    this.getAttribute(
                        "data-project-filter"
                    );


                filterButtons.forEach(
                    function (btn) {

                        btn.classList.remove(
                            "active"
                        );

                    }
                );


                this.classList.add("active");


                projectCards.forEach(
                    function (card) {

                        const category =
                            card.getAttribute(
                                "data-project-category"
                            );


                        if (
                            filter === "all" ||
                            category === filter
                        ) {

                            card.style.display =
                                "flex";

                            setTimeout(
                                function () {

                                    card.style.opacity =
                                        "1";

                                    card.style.transform =
                                        "translateY(0)";

                                },
                                20
                            );

                        } else {

                            card.style.opacity =
                                "0";

                            card.style.transform =
                                "translateY(15px)";

                            setTimeout(
                                function () {

                                    card.style.display =
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
       SMOOTH ANCHOR
    ========================================= */

    document.querySelectorAll(
        'a[href^="#"]'
    ).forEach(function (anchor) {

        anchor.addEventListener(
            "click",
            function (event) {

                const target =
                    document.querySelector(
                        this.getAttribute("href")
                    );


                if (target) {

                    event.preventDefault();

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