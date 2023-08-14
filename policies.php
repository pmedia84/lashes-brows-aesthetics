<?php
//connect to db
include("connect.php");
//page meta variables
$meta_description = "My policies. Make sure you are familiar with these before your first appointment.";
$meta_page_title = "My Policies : Lashes Brows & Aesthetics";
include("./inc/settings.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="canonical" href="https://<?= $domain_name; ?>/policies">
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
                    <h1>Terms &amp; Conditions</h1>
                    <p>Find out about my Terms &amp; Conditions before booking a treatment.</p>
                    <?=$book_now_btn_cta;?>
                </div>
            </div>
        </section>
        <section class="container my-3">

            <h2 class="section-title text-center bg-title">Terms &amp; Conditions</h2>
            <div class="std-card actions-card">
                <h2 class="my-2">Forms</h2>
                <p>Before you attend your first appointment, you will need to have completed a consultation form. You can now do this here.</p>
                <a href="" class="btn-primary btn-secondary my-2">
                    <svg class="icon start">
                        <use href="assets/img/icons/solid.svg#pencil"/>
                    </svg>Complete Booking Form</a>
            </div>
            <p class="text-center section-subtitle my-3">Please make sure you are familiar with these terms and conditions. You will need to have signed and agreed to these before I can carry out any treatments.</p>
            <div class="std-card my-2">
                <h2 class="my-2">Appointments</h2>
                <p>To book an appointment, you must have <a href="">completed a consultation form</a>  and a patch test, where necessary.</p>
                <p>A patch test cannot guarantee a reaction, as a full set of lashes, gives much more exposure than just a small amount of adhesive placed.</p>
                <br>
                <p>Please attend the appointment on your own, as I can not accommodate Children, Partners and Friends.</p>
                <br>
                <p>Please be prepared to be laying down for at least 2.5 hours (for classic lashes) and up to 3-4 hours (for Russian and Mega Volume lashes) for your first full sets.</p>
                <p>I do have an extremely comfortable bed, but if you suffer with pain or a bad back, please take your pain relief before starting your appointment.</p>
                <p>You're welcome to bring a water bottle if it will help.</p>
            </div>
            <div class="std-card my-2">
                <h2 class="my-2">Infills</h2>
                <p>Infills are done every 2-3 weeks and you should have 40% or more of your lashes left. Appointments booked after 3 weeks are charged at full price.</p>
                <br>
                <p>I don't infill other lash tech's work, as we all work differently and use different products, so a new set would be required. This is to ensure and maintain my high standards of work.</p>
                <br>
                <p>Lash Extensions can last anything up to 4-6 weeks, this cannot be guaranteed as everyone's lash cycle is different and your lashes will grow out at different times. This is why infills are recommended regularly.</p>
            </div>
            <div class="std-card my-2">
                <h2 class="my-2">Aftercare &amp; Lash Shed</h2>
                <p>Aftercare should be followed and maintained regularly, to ensure good lash health and cleanliness.</p>
                <p>You are given and aftercare pack with your first set of lashes. If you require any of the items or products afterwards, I sell them separately or as a pack for &pound;8.00</p>
                <br>
                <p>Lash Shed happens mostly in the Spring and Autumn months.</p>
                <p>You will find that you will lose more lashes than normal, so you may need more regular than normal infills if you wish.</p>
            </div>
            <div class="std-card my-2">
                <h2 class="my-2">Cancellations, Payment &amp; Refunds</h2>
                <p>As from the 1<span class="super">st</span> April 2022, a non refundable booking fee of *&pound;25.00 is now taken for every appointment over *&pound;40.00 booked. The *&pound;25.00 will be taken off on the day of your appointment</p>
                <br>
                <p>A 48 hour cancellation notice is required as I can then endeavour tp fill the appointment. After that the *&pound;25.00 booking fee is then non refundable.</p>
                <p>This also applies to getting COVID or any other illness.</p>
                <br>
                <p>I do not offer refunds as you are paying for my time, my products and any other expenses involved in providing you with a service.</p>
                <p>However, client satisfaction is my priority and I will do all I can to resolve the issue.</p>
                <p>If you are unhappy with your service, then please contact me within 48 hours of your appointment, to discuss your concerns.</p>
                <br>
                <p><strong>***For Aesthetics the non refundable booking fee is higher depending on the treatment, and for treatments less than &pound;40.00, a smaller non refundable booking fee is taken.</strong></p>
            </div>
            <strong>WHEN BOOKING YOUR APPOINTMENT, YOU HAVE AGREED TO THESE TERMS &amp; CONDITIONS</strong>
        </section>












    </main>


    <?php include("inc/footer.inc.php"); ?>
</body>

</html>