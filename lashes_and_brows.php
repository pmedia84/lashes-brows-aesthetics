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
                    
                        <img class="border-std" src="./assets/img/services/aesthetics.jpg" alt="">
                    
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
                    
                        <img class="border-std grid-col-1-md" src="./assets/img/services/aesthetics.jpg" alt="">
                    
                </div>
                
                
                
            </div>
        </section>

        

        
        


        

        

    </main>


    <?php include("inc/footer.inc.php"); ?>
</body>

</html>