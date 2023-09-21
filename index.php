<?php
//connect to db
include("connect.php");
//look for news articles first
$news_query = ('SELECT * FROM news_articles WHERE news_articles_status ="Published" LIMIT 3');
$news = $db->query($news_query);
//load reviews
$reviews_q = $db->query('SELECT * FROM reviews ORDER BY reviews_date_time DESC');
//load featured featured services
$services_f_q = $db->query('SELECT * FROM services WHERE service_featured="Yes"');
//page meta variables
$meta_description = "Lashes, Brows and Aesthetics treatments in Sutton Bridge, Lincolnshire. I offer a full range of services from Eyelash extensions to Derma Planing. Find out how you can give yourself that WOW factor with my treatments, you will be amazed!";
$meta_page_title = "Lashes Brows & Aesthetics Treatments in Sutton Bridge";

include("./inc/settings.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://<?= $domain_name; ?>">
    <?php include("./inc/Page_meta.php");?>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
</head>
<body itemscope itemtype="https://schema.org/BeautySalon">
    <!-- Nav Bar -->
    <?php include("inc/nav.inc.php"); ?>
    <!-- Hero -->
    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-text">

                    <h1>Self care is not an expense ...</h1>
                    <p class="hero-subtitle">It's an investment</p>
                    <p itemprop="description">Look and feel more youthful without the need for surgery </p>
                    <?=$book_now_btn_cta;?>
                </div>

            </div>
        </section>
        <section class="bg-primary py-4">
            <h2 class="section-title text-center bg-title services my-3">If it makes you feel Beautiful... do it!</h2>
            <div class="container grid-row-3col">
                <div class="card">
                    <div class="card-header">
                        <img src="./assets/img/services/lip-filler.webp" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-body-title">Aesthetics</h3>
                        <p>Aesthetics are becoming a main part of the Beauty Industry, and I’m pleased to say that I’m fully trained and qualified to be able to offer it all to my clients. I’m also trained in complications, first aid and body dysmorphia , so I won’t let you go out looking like the bride of Frankenstein!</p>
                        <a class="my-2" href="aesthetics-treatments-sutton-bridge">Find Out More</a><br>
                        <?=$book_now_btn;?>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="./assets/img/services/lashes.webp" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-body-title">Eye Lash Extensions</h3>
                        <p>From Classic to Extreme Mega Volume, I bond one lash(Classic) or more lighter weight lashes, handmade into a fan (Russian) to your natural lash, giving a fuller, darker effect.</p>
                        <a class="my-2" href="lashes-and-brows-in-sutton-bridge">Find Out More</a><br>
                        <?=$book_now_btn;?>
                    </div>
                </div>
                <div class="card span">
                    <div class="card-header">
                        <img src="./assets/img/services/brows.webp" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-body-title">Eye Brows</h3>
                        <p>From a simple wax & shape, to the ever popular Brow Lamination & Henna Brow, all brow treatments are catered for.</p>
                        <a class="my-2" href="lashes-and-brows-in-sutton-bridge">Find Out More</a><br>
                        <?=$book_now_btn;?>
                    </div>
                </div>
            </div>
        </section>
        <div class="parallax-bg">
        </div>
        <section class="bg-primary-1000 py-4">
            <h2 class="section-title text-center bg-title about my-3" itemprop="founder">Mandi Saville</h2>
            <div class="container grid-2col">
                <div class="grid-col">
                    <div class="profile-card">
                        <img class="profile-img" src="./assets/img/mandi-saville.jpg" alt="">
                        <div class="profile-card-body">
                            <h3 class="my-2">My Story</h3>
                            <p>My journey started in the Eyelash Industry in 2011, when I decided to take a course in Classic Lash Extensions at Pinewood TV Studios with the Award Winning Eyelash Emporium...</p>
                            <a href="about">Find out more about my story...</a>
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
                            </ul>

                            <p>You can contact me if you have any further questions regarding my qualifications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section-divider">
            <img src="./assets/img/icons/flower.svg" alt="">
        </div>
        <section class="my-3">
            <div class="cta-card">
                <div class="cta-card-body">
                    <div class="cta-card-text">
                        <h2 class="my-2">&pound;50 Off Luxury Prescription Facials</h2>
                        <p>&pound;50 off a course of 3 LBA Luxury Prescription Facials when booked and paid for in full.</p>
                        <?=$book_now_btn;?>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-primary py-4">
            <div class="container">
                <h2 class="section-title text-center bg-title treatments my-3">Some Of My Popular Treatments</h2>
                <p class="text-center">This is a selection of my most popular treatments, you can find the full list on my <a href="price_list">Price List</a> page.</p>

                <div class="grid-row-3col py-4">
                    <?php if ($services_f_q->num_rows > 0) :
                        foreach ($services_f_q as $service) : ?>
                            <div class="service-card">
                                <h3 class="service-card-title my-2 text-center"><?= html_entity_decode($service['service_name']); ?></h3>
                                <p class="service-card-service my-2 text-center"><?= html_entity_decode($service['service_description']); ?></p>
                                <p class="service-card-price my-2 text-center">&pound;<?= $service['service_price']; ?></p>
                                <?=$book_now_btn;?>
                            </div>
                    <?php endforeach;
                    endif; ?>

                </div>
            </div>
        </section>
        <div class="section-divider">
            <img src="./assets/img/icons/flower.svg" alt="">
        </div>

        <section class="bg-primary py-4">
            <div class="container">
                <h2 class="section-title text-center bg-title reviews my-3">What my clients are saying</h2>

                <div class="slider review-slider">
                    <?php
                    if ($reviews_q->num_rows > 0) :
                        foreach ($reviews_q as $review) :
                    ?>
                            <div class="review-slider-review">
                                <div class="review-body">

                                    <div class="review-slider-body">
                                        <a href="<?= $review['reviews_author_url']; ?>" target=blank>
                                            <h3><?= $review['reviews_author_name']; ?></h3>
                                        </a>
                                        <div class="stars">
                                            <i class="fa fa-star star-color <?php if ($review['reviews_rating'] >= 1) {
                                                                                echo "star-color-rated";
                                                                            } ?>"></i>
                                            <i class="fa fa-star star-color <?php if ($review['reviews_rating'] >= 2) {
                                                                                echo "star-color-rated";
                                                                            } ?>"></i>
                                            <i class="fa fa-star star-color <?php if ($review['reviews_rating'] >= 3) {
                                                                                echo "star-color-rated";
                                                                            } ?>"></i>
                                            <i class="fa fa-star star-color <?php if ($review['reviews_rating'] >= 4) {
                                                                                echo "star-color-rated";
                                                                            } ?>"></i>
                                            <i class="fa fa-star star-color <?php if ($review['reviews_rating'] >= 5) {
                                                                                echo "star-color-rated";
                                                                            } ?>"></i>
                                            <span class="review-slider-review-time"><?= $review['reviews_relative_time_description']; ?></span>
                                        </div>
                                        <p><?= $review['reviews_text']; ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php endforeach;
                    endif;
                    ?>
                </div>
            </div>


        </section>
        <div class="section-divider">
            <img src="./assets/img/icons/flower.svg" alt="">
        </div>
        <section class="my-3">
            <div class="container">
                <h2 class="section-title text-center bg-title news my-3">Latest News & Offers</h2>
                <div class="grid-auto">
                    <?php
                    if (mysqli_num_rows($news) > 0) : ?>

                        <?php foreach ($news as $article) :
                            $news_article_body = html_entity_decode($article['news_articles_body']);
                            $news_articles_date = strtotime($article['news_articles_date']);
                            if ($article['news_articles_img'] == "") {
                                $article_img = $article_default_img;
                            } else {
                                $article_img = $article['news_articles_img'];
                            } ?>

                            <div class="card news-card">
                                <div class="card-header">
                                    <img src="../admin/assets/img/news/<?= $article_img; ?>" alt="">
                                </div>
                                <div class="card-body">
                                    <a href="post?article_id=<?= $article['news_articles_id']; ?>">
                                        <h3 class="card-body-title"><?= $article['news_articles_title']; ?></h3>
                                    </a>
                                    <div class="news-card-text">
                                        <?= $news_article_body; ?>

                                    </div>


                                    <a class="my-2" href="post?article_id=<?= $article['news_articles_id']; ?>">See full article...</a><br>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

        </section>
        <section>
            <iframe title="Google maps location of Lashes, Brows & Aesthetics" width="100%" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJReBlEir510cRYIV3Yjs3hbk&key=AIzaSyD5e7plvKHapsDIODrl6JJ-j3qXvxPtw9Y">
            </iframe>
        </section>
    </main>

    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="assets/js/slick-init.js"></script>
    <?php include("inc/footer.inc.php"); ?>
</body>

</html>