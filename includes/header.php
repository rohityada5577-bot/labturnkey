<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo isset($pageTitle) ? $pageTitle : 'LabTurnkey - Laboratory Solutions'; ?>
    </title>

    <meta name="description"
          content="Professional laboratory design, laboratory furniture, turnkey laboratory solutions and installation services.">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<!-- ================= HEADER ================= -->

<header class="site-header" id="siteHeader">

    <div class="header-container">

        <!-- LOGO -->
        <a href="index.php" class="logo">

            <div class="logo-icon">
                <i class="fa-solid fa-flask"></i>
            </div>

            <div class="logo-text">
                <span class="logo-main">LAB</span><span class="logo-accent">TURNKEY</span>
                <small>LABORATORY SOLUTIONS</small>
            </div>

        </a>


        <!-- DESKTOP NAVIGATION -->

        <nav class="main-navigation">

            <a href="index.php"
               class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                Home
            </a>

            <a href="about.php"
               class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
                About Us
            </a>

            <a href="solutions.php"
               class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'solutions.php' ? 'active' : ''; ?>">
                Solutions
            </a>

            <a href="products.php"
               class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : ''; ?>">
                Products
            </a>

            <a href="projects.php"
               class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : ''; ?>">
                Projects
            </a>

        </nav>


        <!-- HEADER CTA -->

        <div class="header-actions">

            <a href="contact.php" class="header-cta">
                <span>Get a Quote</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <!-- MOBILE MENU BUTTON -->

        <button class="mobile-menu-btn"
                id="mobileMenuBtn"
                aria-label="Open Menu">

            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>


    <!-- MOBILE NAVIGATION -->

    <div class="mobile-navigation" id="mobileNavigation">

        <a href="index.php">
            <i class="fa-solid fa-house"></i>
            Home
        </a>

        <a href="about.php">
            <i class="fa-solid fa-building"></i>
            About Us
        </a>

        <a href="solutions.php">
            <i class="fa-solid fa-flask"></i>
            Solutions
        </a>

        <a href="products.php">
            <i class="fa-solid fa-cubes"></i>
            Products
        </a>

        <a href="projects.php">
            <i class="fa-solid fa-diagram-project"></i>
            Projects
        </a>

        <a href="contact.php" class="mobile-contact">
            Get a Quote
            <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>

</header>


<!-- ================= HEADER END ================= -->