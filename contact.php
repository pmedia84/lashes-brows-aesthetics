<?php
//connect to db
include("connect.php");
//page meta variables
$meta_description = "Contact me at Lashes, Brows & Aesthetics";
$meta_page_title = "Contact Me : Lashes Brows & Aesthetics";
include("./inc/settings.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="canonical" href="https://<?= $domain_name; ?>/contact">
    <?php include("./inc/Page_meta.php");?>
</head>

<body>
    <!-- Nav Bar -->
    <?php include("inc/nav.inc.php"); ?>
    <!-- Hero -->
    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-text">
                    <h1>Contact Me</h1>
                    <?=$book_now_btn_cta;?>
                </div>
            </div>
        </section>
        <section class="container my-3 grid-row-2col std-card">

            <div class="">
                <h2>Contact Me</h2>
                <p>You can use the contact details below or fill out the form and I will be in touch.</p>
                <form class="my-2" action="scripts/contact.script.php" method="POST" id="contact_form">
                    <div class="form-input-wrapper">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your name" autocomplete="name">
                    </div>
                    <div class="form-input-wrapper">
                        <label for="email">eMail Address</label>
                        <input type="email" name="email" id="email" placeholder="Your eMail address" autocomplete="email">
                    </div>
                    <div class="form-input-wrapper">
                        <label for="phone">Phone No.</label>
                        <input type="text" phone="phone" id="phone" name="phone" placeholder="Your phone No." autocomplete="tel">
                    </div>
                    <div class="form-input-wrapper">
                        <label for="message">Your message</label>
                        <textarea name="message" id="message" cols="30" rows="5" placeholder="Your message..."></textarea>
                    </div>
                    <button class="btn-primary my-2 form-controls-btn loading-btn" type="submit" id="upload-btn">
                        <span id="loading-btn-text" class="loading-btn-text">
                            <svg class="icon ">
                                <use href="assets/img/icons/solid.svg#paper-plane" />
                            </svg>Send Message</span>
                        <svg class="icon spinner-icon d-none loader-spinner " id="loading-icon">
                            <use href="assets/img/icons/solid.svg#circle-notch" />
                        </svg>
                    </button>
                </form>
                <div class="google-policy">
                    <p>Our website is protected by reCAPTCHA and the Google</p>
                    <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and
                    <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
                </div>
                <div class="response d-none">
                    <p id="response-msg"></p>
                </div>
            </div>
            <div class="map">
                <iframe width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJReBlEir510cRYIV3Yjs3hbk&key=AIzaSyD5e7plvKHapsDIODrl6JJ-j3qXvxPtw9Y">
                </iframe>
            </div>


        </section>
    </main>
    <?php include("inc/footer.inc.php"); ?>
</body>

</html>