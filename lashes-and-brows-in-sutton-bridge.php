<?php
//connect to db
include("connect.php");
//page meta variables
$meta_description = "Eye Lash extensions in Sutton Bridge from Lashes Brows and Aesthetics. I also offer eyebrow treatments as well. Come along to my studio and see for yourself.";
$meta_page_title = "Lashes And Brows - Lashes Brows & Aesthetics";
include("./inc/settings.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="canonical" href="https://<?= $domain_name; ?>/lashes-and-brows-in-sutton-bridge">
    <?php include("./inc/Page_meta.php");?>
</head>
<body itemscope itemtype="https://schema.org/Service" itemscope itemtype="https://schema.org/Service">
    <meta itemprop="serviceType" content="Lashes & Brows" />
    <meta itemprop="provider" content="<?= $business_name; ?>">
    <!-- Nav Bar -->
    <?php include("inc/nav.inc.php"); ?>
    <!-- Hero -->
    <main>
        <section class="hero std-hero lashes-hero">
            <div class="container hero-grid">
                <div class="hero-text">
                    <h1>Lashes & Brows</h1>
                    <p>"Feel Dressed The Moment You Wake!"</p>
                    <?= $book_now_btn_cta; ?>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="section-title text-center">Give yourself that wow factor</h2>
                <p class="text-center section-subtitle">The moment you wake up, you are already dressed, with your lashes & brows.
                    From intense Mega Russian Volume Lashes, down to Simple Classic Lashes, your going to look awake & ready for the day.
                    With Lashes come Brows, from a simple brow tint & shape to the highly popular laminated brow, you will feel complete. So for Lash and Brow treatments in  <span itemprop="areaServed" itemscope itemtype="https://schema.org/City"><span itemprop="name">Sutton Bridge</span></span>, check out the full list of treatments on <a href="price_list">my price list</a>.</p>
                <div itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/OfferCatalog">
                    <div class="my-2 services-grid">
                        <div class="text-box img-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                            <meta itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                            <img src="./assets/img/services/lash-extensionsv2.webp" alt="">
                            <div class="img-card-body">
                                <p class="text-box-subtitle">Eyes Are The Window To Your Soul</p>
                                <h3 class="text-box-title" itemprop="name">Eyelash Extensions</h3>
                                <p class="text-box-text" itemprop="description">From Classic to Extreme Mega Volume, I bond one lash(Classic) or more lighter weight lashes, handmade into a fan (Russian) to your natural lash, giving a fuller, darker effect. The look can vary from subtle, being Classic to extremely dramatic with Extreme Mega Volume.</p>
                                <div class="img-card-footer">
                                    <div class="text-box-price-card">
                                        <p>Starting From <span>£40.00</span></p>
                                    </div>
                                    <?= $book_now_btn; ?>
                                </div>
                            </div>
                        </div>

                        <div class="text-box img-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                            <meta itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                            <img src="./assets/img/services/brows-2.webp" alt="">
                            <div class="img-card-body">
                                <p class="text-box-subtitle">If Eyes Are The Window To Your Soul, Then Brows Are The Frame To That Window</p>
                                <h3 class="text-box-title" itemprop="name">Brows</h3>
                                <p class="text-box-text" itemprop="description">From a simple wax & shape, to the ever popular Brow Lamination & Hennna Brow, all brow treatments are catered for.</p>
                                <div class="img-card-footer">
                                    <div class="text-box-price-card">
                                        <p>Starting From <span>£40.00</span></p>
                                    </div>
                                    <?= $book_now_btn; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-grid">
                        <div class="text-box img-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                            <meta itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                            <img src="./assets/img/services/lash.webp" alt="">
                            <div class="img-card-body">
                                <p class="text-box-subtitle">Boost your natural lashes!</p>
                                <h3 class="text-box-title" itemprop="name">Lash Lifting</h3>
                                <p class="text-box-text" itemid="description">The natural lashes are boosted from the root, giving them a lifted, lengthened appearance, without the need for extensions.</p>
                                <div class="img-card-footer">
                                    <div class="text-box-price-card">
                                        <p>Starting From <span>&pound;50.00</span></p>
                                    </div>
                                    <?= $book_now_btn; ?>
                                </div>
                            </div>
                        </div>
                        <div class="text-box img-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                            <meta itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                            <img src="./assets/img/services/brow-laminationv2.webp" alt="">
                            <div class="img-card-body">
                                <p class="text-box-subtitle">Give your brows that ultimate flexibility!</p>
                                <h3 class="text-box-title" itemprop="name">Brow Lamination</h3>
                                <p class="text-box-text" itemprop="description">Brow lamination involves straightening and lifting the hairs using a chemical solution, which allows the hairs to have more flexibility to move them into your desired shape, therefore covering any gaps or stray areas.</p><br>
                                <div class="img-card-footer">
                                    <div class="text-box-price-card">
                                        <p>Starting From <span>&pound;45.00</span></p>
                                    </div>
                                    <?= $book_now_btn; ?>
                                </div>
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