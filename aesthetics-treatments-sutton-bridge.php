<?php
//connect to db
include("connect.php");
//page meta variables
$meta_description = "Aesthetics and beauty treatments in Sutton Bridge Lincolnshire from Lashes, Brows & Aesthetics. I offer a full range of treatments including Dermal Filers, Anti Wrinkle Treatments, Micro Needling and many more.";
$meta_page_title = "Aesthetic Treatments in Sutton Bridge : Lashes Brows & Aesthetics";
include("./inc/settings.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://<?= $domain_name; ?>/aesthetics-treatments-in-sutton-bridge">
    <?php include("./inc/Page_meta.php");?>
</head>

<body itemscope itemtype="https://schema.org/BeautySalon">

    <!-- Nav Bar -->
    <?php include("inc/nav.inc.php"); ?>
    <!-- Hero -->
    <main>
        <section class="hero std-hero">
            <div class="container hero-grid">
                <div class="hero-text">
                    <h1>Aesthetic Treatments</h1>
                    <p>A range of Aesthetic Treatments to help rejuvenate your skin</p>
                    <?= $book_now_btn_cta; ?>
                </div>
            </div>
        </section>
        <section class="" itemscope itemtype="https://schema.org/Service">
            <meta itemprop="serviceType" content="Aesthetics Treatments">
            <meta itemprop="provider" content="<?= $business_name; ?>">
            <div class="container">
                <h2 class="section-title text-center">For More Youthful Looking Skin … </h2>
                <p class="text-center section-subtitle my-2">A complete range of aesthetic treatment’s are offered from Anti-Wrinkle injections & dermal filler to the fantastic Skin Boosters.Whatever you chose, you will be creating your journey to more youthful skin. My salon is in <span itemprop="areaServed" itemscope itemtype="https://schema.org/City"><span itemprop="name">Sutton Bridge</span></span>, I have all the latest equipment required to give you the best treatment you deserve.You can see my full list by <a href="price_list">viewing my price list...</a></p>
            </div>
            <div class="container" itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/OfferCatalog">
                <div class=" my-2 services-grid">
                    <div class="text-box img-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <img class="border-std" src="./assets/img/services/dermal-filler.webp" alt="Dermal filler treatments available from Lashes, Brows & Aesthetics in Sutton Bridge">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">Gain immediate and visible results</p>
                            <h3 class="text-box-title" itemprop="name">Dermal Fillers</h3>
                            <p class="text-box-text" itemprop="description">Dermal Fillers are a Hyaluronic Acid, which is found in the skin, eyes and joints.
                                Hyaluronic Acid is mixed with other ingredients, to make it into a gel, it’s then used to add plumpness & volume to enhance the areas that loose elasticity, as we get older.

                                <br>I currently offer Signature Lips, Russian Lips, Nasolabial & Marionette Lines.
                            </p>
                            <div class="img-card-footer">
                                <div class="text-box-price-card">
                                    <p>Starting From <span>&pound;145.00</span></p>
                                </div>
                                <?= $book_now_btn; ?>
                            </div>
                        </div>

                    </div>
                    <div class="text-box img-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <img src="./assets/img/services/anti-wrinkle.webp" alt="Lip filler service from Lashes Brows and Aesthetics">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">Reduce Visible Signs Of Aging, Fine Lines & Wrinkles</p>
                            <h3 class="text-box-title" itemprop="name">Anti Wrinkle Treatments</h3>
                            <p class="text-box-text" itemprop="description">Depending on the areas treated, this can last from 3-12 months.</p>
                            <div class="img-card-footer">
                                <div class="text-box-price-card">
                                    <p>Starting From <span>&pound;180.00</span></p>
                                </div>
                                <?= $book_now_btn; ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" my-2 services-grid">
                    <div class="text-box img-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <img src="./assets/img/services/b12v2.webp" alt="Vitamin B12 injections from Lashes Brows and Aesthetics">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">Increase energy levels and concentration!</p>
                            <h3 class="text-box-title" itemprop="name">Vitamin B12</h3>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Gives An Energy Boost</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Gives A Mood Boost</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Balances Hormone Levels</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Reduces Fatigue</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Helps Depression</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Treats Anemia</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Treats Headaches</li>
                            </ul>
                            <p class="text-box-text">These are just some of the benefits of this amazing Vitamin.</p>
                            <p class="text-box-text" itemprop="description">1 injection weekly for 4 weeks & then once a month going forward is recommended for feeling the full benefit.</p>
                            <div class="img-card-footer">
                                <div class="text-box-price-card">
                                    <p>Starting From <span>£30.00</span></p>
                                </div>
                                <?= $book_now_btn; ?>
                            </div>
                        </div>

                    </div>
                    <div class="text-box img-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <img src="./assets/img/services/skin-peel.webp" alt="Skin Peel service from Lashes Brows and Aesthetics">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">Improve your skin tone</p>
                            <h3 class="text-box-title" itemprop="name">Skin Peel</h3>
                            <p class="text-box-text" itemprop="description">Tailored to your own skin type, they even out skin tone, lighten pigmented skin (age spots) acne, scarring, fine wrinkles and lines. After the peel, your skin grows back, producing more collagen and elastin, so starting to diminish the signs of ageing. <br> This treatment done together with Dermaplaning & Microneedling is so beneficial for your skin.</p>
                            <div class="img-card-footer">
                                <div class="text-box-price-card">
                                    <p>Starting From <span>£40.00</span></p>
                                </div>
                                <?= $book_now_btn; ?>
                            </div>
                        </div>

                    </div>


                </div>

                <div class=" my-2 services-grid">
                    <div class="text-box img-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <img src="./assets/img/services/microneedling.webp" alt="Microneedling service from Lashes Brows and Aesthetics">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">Reduce the appearance of your skin straight away!</p>
                            <h3 class="text-box-title" itemprop="name">Micro Needling</h3>
                            <p class="text-box-text" itemprop="description">Also known as collagen induction therapy, it’s a treatment using a dermapen with a needle cartridge, this causes trauma to the skin, the process of healing starts straight away and renews the skin cells. As it repairs the skin produces collagen and elastin and this gives an immediate plumping effect. Again the benefits to this are amazing, reducing the appearance of fine lines and wrinkles, keloid scarring, sun damage, ageing, shrinks large pores, reduces rosacea and improves acne. </p><br>
                            <p class="text-box-text">The treatment continues to boost the appearance of your complexion, for months afterwards. For maximum results and improvement, this treatment is better done in a course of at least one every four weeks for three months.</p>
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
                        <img src="./assets/img/services/dermaplaning.webp" alt="Dermaplaning Treatments available from Lashes, Brows & Aesthetics in Sutton Bridge">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">Reduce the appearance of your skin straight away!</p>
                            <h3 class="text-box-title" itemprop="name">Dermaplaning</h3>
                            <p class="text-box-text" itemprop="description">Dermaplaning is a non-invasive cosmetic treatment that involves scraping off dead skin cells and peach fuzz with a scalpel to leave your face brighter and smoother.</p><br>
                            <p class="text-box-text">What are the benefits of Dermaplaning?</p>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Softer, smoother skin.</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Brighter-looking appearance.</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Smoother foundation for makeup.</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>A light exfoliation.</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Peach-fuzz removal.</li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>No down time.</li>
                            </ul>
                            <div class="img-card-footer">
                                <div class="text-box-price-card">
                                    <p>Starting From <span>&pound;45.00</span></p>
                                </div>
                                <?= $book_now_btn; ?>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=" my-2 services-grid">
                    <div class="text-box img-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <img src="./assets/img/services/lbaa.webp" alt="">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">Double Cleanse, Tone, Peel, Dermaplaning, Masque & Microneedling</p>
                            <h3 class="text-box-title" itemprop="name">LBAA Luxury Prescription Facial</h3>
                            <p class="text-box-text" itemprop="description">Recommendation for maximum benefit are a course of 4-6 monthly treatments</p>
                            <div class="img-card-footer">
                                <div class="text-box-price-card">
                                    <p>Starting From <span>&pound;125.00</span></p>
                                </div>
                                <?= $book_now_btn; ?>
                            </div>
                        </div>

                    </div>


                    <div class="text-box img-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="itemOffered" itemscope itemtype="https://schema.org/Service">
                        <img src="./assets/img/services/profhilo.webp" alt="">
                        <div class="img-card-body">
                            <p class="text-box-subtitle">Perfect if you don't want to look "over-filled"</p>
                            <h3 class="text-box-title" itemprop="name">Profhilo</h3>
                            <p class="text-box-text" itemprop="description">Profhilo is the perfect choice for those who don’t necessarily want to look ‘over-filled’ but who would like to lift, tone and hydrate their skin appearance for a youthful, beautiful glow.</p><br>
                            <p class="text-box-text">After a course of Profhilo, you can expect to see a more hydrated, glowing and luminous complexion with an improved tone and texture with fewer lines and wrinkles. The skin will look and feel smoother and tighter.</p>
                            <p class="text-box-text"><strong>This Is Not a Dermal Filler</strong></p>
                            <div class="img-card-footer">
                                <div class="text-box-price-card">
                                    <p>Starting From <span>&pound;250.00</span></p>
                                </div>
                                <?= $book_now_btn; ?>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="cta-banner my-2">
                    <h2>Want to find out more?</h2>
                    <h3>Contact Me</h3>
                    <p>If you have any questions regarding any of my Aesthetics treatments you can <a href="contact">Contact Me</a> and I will be happy to answer any questions that you may have regarding any of my treatments.</p>
                    <h3>Price List</h3>
                    <p>For my full list of Aesthetics treatments including my <a href="lashes-and-brows-in-sutton-bridge">Lashes and Brow treatments</a> you can view my price list.</p>
                    <a href="price_list" class="btn-primary btn-cta my-2">View Price List</a>
                </div>
            </div>
        </section>
    </main>
    <?php include("inc/footer.inc.php"); ?>
</body>

</html>