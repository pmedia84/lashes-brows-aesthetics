<?php
//connect to db
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("inc/header.inc.php"); ?>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <title>About Me : Lashes Brows & Aesthetics</title>
</head>
<body>
    <!-- Nav Bar -->
    <?php include("inc/nav.inc.php"); ?>
    <!-- Hero -->
    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-text">
                    <h1>About Me</h1>
                    <a class="btn-primary btn-cta my-3" href="https://app.pocketpa.com/online-booking/HpgvjVINf1" target="_blank">Book Now</a>
                </div>
            </div>
        </section>
        <section class="">
            <h2 class="section-title text-center bg-title my-3">About Me</h2>
            <p class="text-center section-subtitle my-3">Where my journey began in Lashes Brows and Aesthetics.</p>
        </section>

        <section class="bg-primary-1000 py-4">
            <h2 class="section-title text-center bg-title about my-3">Mandi Saville</h2>
            <div class="container grid-2col">
                <div class="grid-col">
                    <div class="profile-card">
                        <img class="profile-img" src="./assets/img/mandi-saville.jpg" alt="">
                        <div class="profile-card-body">
                            <h3 class="my-2">My Story</h3>
                            <p>My journey started in the Eyelash Industry in 2011, when I decided to take a course in Classic Lash Extensions at Pinewood TV Studios with the Award Winning Eyelash Emporium.</p>
                            <p>It was only a hobby at first and I did it alongside my other two jobs, I had as a barber.</p>
                            <br>
                            <p>I started getting more & more clients and my passion for doing lashes grew & grew. Russian Volume then came onto the market and I invested in a high end course and from then on continued to do more courses, with some of the best trainers in the world, even to this day, I like to do a couple of courses a year to keep up with the ever evolving world of lashes.I have also trained in Lash Lifting, all aspects of Brows including Lamination & Henna, Facial Waxing & Dermaplaning.</p>
                            <p>I use top quality premium products, my lashes & other products are all cruelty free and most apart from two facial products are all vegan friendly.</p>
                            <br>
                            <p>Outside of work, I have 3 daughters and 4 grandchildren, 3 crazy chihuahuas and an absolute love for Maincoon cats of which I have 2 and a litter of 5 babies. That’s my time pretty much taken up!</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col">
                    <div class="profile-card">

                        <div class="profile-card-body">
                            <h4 class="my-2">Qualifications</h4>
                            <p>I am always training to give you the best level of professionalism that I take pride in. Keeping up to date is very important for me and ensures that you have the very best quality of treatments.</p>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Dermal Fillers</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Anti Wrinkle</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Skin Boosters</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Facials</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Waxing</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Dermaplaning</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Microneedling</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Skin Peels</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Vitamin B12 Injections</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lashes</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Brows</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lash &amp; Brows</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>First Aid</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Complications</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Body Dysmorphia</li>

                            </ul>
                            <p>You can contact me if you have any further questions regarding my qualifications.</p>
                        </div>
                        <div class="profile-card-body">
                            <h4 class="my-2">Follow Me</h4>
                            <p>Keep up to date with everything to do with me, find out about up coming appointments and new services. Follow me on Facebook and Instagram.</p>
                            <ul>
                                <?php if ($socials_result_num >= 1) : ?>
                                    <?php foreach ($socials as $social) : ?>
                                        <li><a href="http://<?= $social['business_socials_url']; ?>" target="_blank" rel="noopener noreferrer"><?= $social['socials_type_icon']; ?> <?= $social['socials_type_name']; ?></a></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>











    </main>


    <?php include("inc/footer.inc.php"); ?>
</body>

</html>