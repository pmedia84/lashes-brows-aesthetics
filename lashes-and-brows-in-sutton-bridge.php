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
                    <h1>Lashes & Brow Treatments</h1>
                    <p>Give yourself that WOW Factor</p>
                    <a class="btn-primary btn-cta my-3" href="">Book Now</a>
                </div>
            </div>
        </section>
        <section class="">
            <h2 class="section-title text-center py-3">Some of our popular treatments</h2>
            <p class="text-center section-subtitle">Some of our most popular Eyelash and Brow Services.</p>
            
            <div class="container">

                <div class="grid-row-2col my-3 services-grid">
                    <div class="text-box">
                        <p class="text-box-subtitle">Eyes Are The Window To Your Soul</p>
                        <h3 class="text-box-title">Lashes</h3>
                       
                        <p class="text-box-text">From Classic to Extreme Mega Volume, I bond one lash(Classic) or more lighter weight lashes, handmade into a fan (Russian) to your natural lash, giving a fuller, darker effect. The look can vary from subtle, being Classic to extremely dramatic with Extreme Mega Volume.</p>
                        
                        <div class="text-box-price-card">
                            <p>Starting From <span>£40.00</span></p>
                        </div>
                        <a href="" class="btn-primary my-2">Book Now</a>

                    </div>
                    
                        <img class="border-std" src="./assets/img/services/lash-extensions.webp" alt="">
                    
                </div>

                <div class="grid-row-2col my-3 services-grid">
                    <div class="text-box grid-col-2-md">
                        <p class="text-box-subtitle">If Eyes Are The Window To Your Soul, Then Brows Are The Frame To That Window</p>
                        <h3 class="text-box-title">Brows</h3>
                       
                        <p class="text-box-text">From a simple wax & shape, to the ever popular Brow Lamination & Hennna Brow, all brow treatments are catered for.</p>
                        
                        <div class="text-box-price-card">
                            <p>Starting From <span>£40.00</span></p>
                        </div>
                        <a href="" class="btn-primary my-2">Book Now</a>

                    </div>
                    
                        <img class="border-std grid-col-1-md" src="./assets/img/services/brows.webp" alt="">
                    
                </div>
                <div class="grid-row-2col my-3 services-grid" itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                    <div class="text-box">
                        <p class="text-box-subtitle">Boost your natural lashes!</p>
                        <h3 class="text-box-title" itemprop="name">Lash Lifting</h3>

                        <p class="text-box-text">The natural lashes are boosted from the root, giving them a lifted, lengthened appearance, without the need for extensions.</p>
                        <div class="text-box-price-card">
                            <p>Starting From <span>&pound;50.00</span></p>
                        </div>
                        <a href="https://app.pocketpa.com/online-booking/HpgvjVINf1" target="_blank" class="btn-primary my-2">Book Now</a>

                    </div>

                    <img class="border-std" src="./assets/img/services/lash-extensions.webp" alt="">

                </div>
                <div class="grid-row-2col my-3 services-grid" itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                    <div class="text-box">
                        <p class="text-box-subtitle">Give your brows that ultimate flexibility!</p>
                        <h3 class="text-box-title" itemprop="name">Brow Lamination</h3>

                        <p class="text-box-text">Brow lamination involves straightening and lifting the hairs using a chemical solution, which allows the hairs to have more flexibility to move them into your desired shape, therefore covering any gaps or stray areas.</p><br>

                        <div class="text-box-price-card">
                            <p>Starting From <span>&pound;45.00</span></p>
                        </div>
                        <a href="https://app.pocketpa.com/online-booking/HpgvjVINf1" target="_blank" class="btn-primary my-2">Book Now</a>

                    </div>
                    <img class="border-std grid-col-1-md" src="./assets/img/services/brow-lamination.webp" alt="">

                </div>
                
                
                
            </div>
        </section>

        

        
        


        

        

    </main>


    <?php include("inc/footer.inc.php"); ?>
</body>

</html>