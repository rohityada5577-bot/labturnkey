<?php

require_once __DIR__ . '/config/mail.php';

$success = '';
$error = '';

$name = '';
$email = '';
$phone = '';
$company = '';
$subject = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation

    if (
        empty($name) ||
        empty($email) ||
        empty($phone) ||
        empty($message)
    ) {

        $error = 'Please fill all required fields.';

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = 'Please enter a valid email address.';

    } elseif (!preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {

        $error = 'Please enter a valid phone number.';

    } else {

        $sent = sendContactEmail(
            $name,
            $email,
            $phone,
            $company,
            $subject,
            $message
        );

        if ($sent) {

            $success =
                'Thank you! Your enquiry has been submitted successfully. Our team will contact you shortly.';

            $name = '';
            $email = '';
            $phone = '';
            $company = '';
            $subject = '';
            $message = '';

        } else {

            $error =
                'Something went wrong while sending your enquiry. Please try again later.';
        }
    }
}

include 'includes/header.php';

?>

<!-- ================================
     CONTACT HERO
================================ -->

<section class="contact-hero">

    <div class="container">

        <div class="contact-hero-content">

            <span class="hero-label">
                GET IN TOUCH
            </span>

            <h1>
                Let's Build Your
                <span>Laboratory</span>
            </h1>

            <p>
                Tell us about your laboratory requirements and our
                experts will help you plan the right solution.
            </p>

        </div>

    </div>

</section>


<!-- ================================
     CONTACT SECTION
================================ -->

<section class="contact-section">

    <div class="container">

        <div class="contact-grid">


            <!-- LEFT SIDE -->

            <div class="contact-info">

                <span class="section-label">
                    CONTACT US
                </span>

                <h2>
                    Have a laboratory
                    project in mind?
                </h2>

                <p>
                    From laboratory design and furniture to complete
                    turnkey solutions, our team can help transform
                    your requirements into a professional laboratory.
                </p>


                <div class="contact-cards">


                    <div class="contact-card">

                        <div class="contact-icon">
                            📍
                        </div>

                        <div>
                            <h4>Our Office</h4>

                            <p>
                                Mumbai, Maharashtra, India
                            </p>
                        </div>

                    </div>


                    <div class="contact-card">

                        <div class="contact-icon">
                            📞
                        </div>

                        <div>
                            <h4>Call Us</h4>

                            <p>
                                +91 98765 43210
                            </p>
                        </div>

                    </div>


                    <div class="contact-card">

                        <div class="contact-icon">
                            ✉
                        </div>

                        <div>
                            <h4>Email Us</h4>

                            <p>
                                info@yourcompany.com
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            <!-- RIGHT FORM -->

            <div class="contact-form-wrapper">

                <div class="form-header">

                    <span>
                        PROJECT ENQUIRY
                    </span>

                    <h3>
                        Tell us about your project
                    </h3>

                    <p>
                        Fill in the details below and we'll get
                        back to you shortly.
                    </p>

                </div>


                <?php if (!empty($success)): ?>

                    <div class="alert success">
                        <?php echo htmlspecialchars($success); ?>
                    </div>

                <?php endif; ?>


                <?php if (!empty($error)): ?>

                    <div class="alert error">
                        <?php echo htmlspecialchars($error); ?>
                    </div>

                <?php endif; ?>


                <form
                    method="POST"
                    action="contact.php"
                    id="contactForm"
                >


                    <div class="form-row">


                        <div class="form-group">

                            <label>
                                Your Name *
                            </label>

                            <input
                                type="text"
                                name="name"
                                placeholder="Enter your name"
                                value="<?php echo htmlspecialchars($name); ?>"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                Email Address *
                            </label>

                            <input
                                type="email"
                                name="email"
                                placeholder="you@example.com"
                                value="<?php echo htmlspecialchars($email); ?>"
                                required
                            >

                        </div>


                    </div>


                    <div class="form-row">


                        <div class="form-group">

                            <label>
                                Phone Number *
                            </label>

                            <input
                                type="tel"
                                name="phone"
                                placeholder="+91 XXXXX XXXXX"
                                value="<?php echo htmlspecialchars($phone); ?>"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                Company
                            </label>

                            <input
                                type="text"
                                name="company"
                                placeholder="Company name"
                                value="<?php echo htmlspecialchars($company); ?>"
                            >

                        </div>


                    </div>


                    <div class="form-group">

                        <label>
                            Subject
                        </label>

                        <select name="subject">

                            <option value="">
                                Select requirement
                            </option>

                            <option value="Laboratory Design">
                                Laboratory Design
                            </option>

                            <option value="Laboratory Furniture">
                                Laboratory Furniture
                            </option>

                            <option value="Turnkey Laboratory">
                                Turnkey Laboratory
                            </option>

                            <option value="Safety Systems">
                                Laboratory Safety Systems
                            </option>

                            <option value="Other">
                                Other
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>
                            Message *
                        </label>

                        <textarea
                            name="message"
                            rows="6"
                            placeholder="Tell us about your laboratory requirements..."
                            required
                        ><?php echo htmlspecialchars($message); ?></textarea>

                    </div>


                    <button
                        type="submit"
                        class="submit-btn"
                    >

                        <span>
                            Send Enquiry
                        </span>

                        <span class="arrow">
                            →
                        </span>

                    </button>


                </form>

            </div>

        </div>

    </div>

</section>


<!-- ================================
     CTA
================================ -->

<section class="contact-cta">

    <div class="container">

        <div class="cta-box">

            <div>

                <span>
                    READY TO START?
                </span>

                <h2>
                    Let's create a better laboratory.
                </h2>

            </div>

            <a href="tel:+919876543210">
                Call Our Experts →
            </a>

        </div>

    </div>

</section>


<?php include 'includes/footer.php'; ?>