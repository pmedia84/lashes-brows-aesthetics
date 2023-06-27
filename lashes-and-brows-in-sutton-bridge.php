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
    <title>Eyebrow and Lash Treatments in Sutton Bridge : Lashes Brows & Aesthetics</title>
    <link rel="canonical" href="https://<?= $domain_name; ?>/lashes-and-brows-in-sutton-bridge">
    <meta name="description" content="Lashes and Brow treatments in Sutton Bridge, from Lashes, Brows & Aesthetics. I provide a full selection of treatments to give yourself that wow factor. Find out how I can enhance your look!">
</head>

<body>
    <!-- Nav Bar -->
    <?php include("inc/nav.inc.php"); ?>
    <!-- Hero -->
    <main>
        <section class="hero std-hero lashes-hero">
            <div class="container hero-grid">
                <div class="hero-text">
                    <h1>Lash & Brow Treatments</h1>
                    <p>Feel Dressed The Moment You Wake!”</p>
                    <?= $book_now_btn_cta; ?>
                </div>
            </div>
        </section>
        <section class="">
            <div class="container">
                <h2 class="section-title text-center">Some of my popular treatments</h2>
                <p class="text-center section-subtitle">The moment you wake up, you are already dressed, with your lashes & brows.
                    From intense Mega Russian Volume Lashes, down to Simple Classic Lashes, your going to look awake & ready for the day.
                    With Lashes come Brows, from a simple brow tint & shape to the highly popular laminated brow, you will feel complete.
                    For the full list of treatments along with their prices, you can <a href="price_list">view my price list</a>.</p>
                <div class="my-2 services-grid">
                    <div class="text-box img-card">
                        <img src="./assets/img/services/lash-extensionsv2.webp" alt="">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">Eyes Are The Window To Your Soul</p>
                            <h3 class="text-box-title">Lashes</h3>
                            <p class="text-box-text">From Classic to Extreme Mega Volume, I bond one lash(Classic) or more lighter weight lashes, handmade into a fan (Russian) to your natural lash, giving a fuller, darker effect. The look can vary from subtle, being Classic to extremely dramatic with Extreme Mega Volume.</p>
                            <div class="img-card-footer">
                                <div class="text-box-price-card">
                                    <p>Starting From <span>£40.00</span></p>
                                </div>
                                <?= $book_now_btn; ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-box img-card">
                        <img src="./assets/img/services/brows.webp" alt="">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">If Eyes Are The Window To Your Soul, Then Brows Are The Frame To That Window</p>
                            <h3 class="text-box-title">Brows</h3>
                            <p class="text-box-text">From a simple wax & shape, to the ever popular Brow Lamination & Hennna Brow, all brow treatments are catered for.</p>
                            <div class="img-card-footer">
                                <div class="text-box-price-card">
                                    <p>Starting From <span>£40.00</span></p>
                                </div>
                                <?= $book_now_btn; ?>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="services-grid" itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                    <div class="text-box img-card">
                        <img src="./assets/img/services/lash.webp" alt="">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">Boost your natural lashes!</p>
                            <h3 class="text-box-title" itemprop="name">Lash Lifting</h3>
                            <p class="text-box-text">The natural lashes are boosted from the root, giving them a lifted, lengthened appearance, without the need for extensions.</p>
                            <div class="img-card-footer">
                                <div class="text-box-price-card">
                                    <p>Starting From <span>&pound;50.00</span></p>
                                </div>
                                <?= $book_now_btn; ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-box img-card">
                        <img src="./assets/img/services/brow-laminationv2.webp" alt="">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">Give your brows that ultimate flexibility!</p>
                            <h3 class="text-box-title" itemprop="name">Brow Lamination</h3>
                            <p class="text-box-text">Brow lamination involves straightening and lifting the hairs using a chemical solution, which allows the hairs to have more flexibility to move them into your desired shape, therefore covering any gaps or stray areas.</p><br>
                            <div class="img-card-footer">
                                <div class="text-box-price-card">
                                    <p>Starting From <span>&pound;45.00</span></p>
                                </div>
                                <?= $book_now_btn; ?>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="cta-banner my-2">
                    <h2>Want to find out more?</h2>
                    <h3>Contact Me</h3>
                    <p>If you have any questions regarding any of my Lashes & Brow treatments you can <a href="contact">Contact Me</a> and I will be happy to answer any questions that you may have regarding any of my treatments.</p>
                    <h3>Price List</h3>
                    <p>For my full list of Lashes & Brow treatments including my <a href="aesthetics-treatments-sutton-bridge">Aesthetics Treatments</a> you can view my price list.</p>
                    <a href="price_list" class="btn-primary btn-cta my-2">View Price List</a>
                </div>

            </div>
        </section>











    </main>


    <?php include("inc/footer.inc.php"); ?>
</body>

</html>