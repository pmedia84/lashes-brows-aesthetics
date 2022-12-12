<?php
//connect to db
include("connect.php");
//look for news articles first
$news_query = ('SELECT * FROM news_articles WHERE news_articles_status ="Published" LIMIT 3');
$news = $db->query($news_query);

//load reviews
$reviews_query = ('SELECT * FROM reviews ORDER BY reviews_date_time DESC');
$reviews = $db->query($reviews_query);
$reviews_result_num = $reviews->num_rows;

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
    <title>Eyebrow extensions : Lashes Brows & Aesthetics</title>
</head>

<body>
    <!-- Nav Bar -->
    <?php include("inc/nav.inc.php"); ?>
    <!-- Hero -->
    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-text">
                <a style="display:inline-block;background-color: #04ad84;margin:0;padding:15px 30px;border-radius:5px;color:#fff;text-transform:uppercase;text-align:center;line-height:1;" href="https://app.pocketpa.com/online-booking/HpgvjVINf1" target="_blank">Lashes Brows & Aesthetics</a>
                    <h1>Pamper Yourself!</h1>
                    <p>Transform your look with our amazing Eyelash, Eyebrow and Aesthetics treatments.</p>
                    <a class="btn-primary btn-cta my-3" href="">Book Now</a>
                </div>
                <img src="./assets/img/icons/arrow-down.svg" alt="" class="hero-arrow">
            </div>
        </section>
        <section class="bg-primary py-4">
            <h2 class="section-title text-center bg-title services my-3">You Deserve To Be Pampered</h2>
            <div class="container cards-grid-3">
                <div class="card">
                    <div class="card-header">
                        <img src="./assets/img/services/aesthetics.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-body-title">Aesthetics</h3>
                        <p>Aesthetics are becoming a main part of the Beauty Industry, and I’m pleased to say that I’m fully trained and qualified to be able to offer it all to my clients. I’m also trained in complications, first aid and body dysmorphia , so I won’t let you go out looking like the bride of Frankenstein!</p>
                        <a class="my-2" href="">Find Out More</a><br>
                        <a class="btn-primary" href="">Book Now</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="./assets/img/services/aesthetics.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-body-title">Eye Lash Extensions</h3>
                        <p>From Classic to Extreme Mega Volume, I bond one lash(Classic) or more lighter weight lashes, handmade into a fan (Russian) to your natrual lash, giving a fuller, darker efffect.</p>
                        <a class="my-2" href="">Find Out More</a><br>
                        <a class="btn-primary" href="">Book Now</a>
                    </div>
                </div>
                <div class="card span">
                    <div class="card-header">
                        <img src="./assets/img/services/aesthetics.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-body-title">Eye Brows</h3>
                        <p>From a simple wax & shape, to the ever popular Brow Lamination & Hennna Brow, all brow treatments are catered for.</p>
                        <a class="my-2" href="">Find Out More</a><br>
                        <a class="btn-primary" href="">Book Now</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="parallax-bg">
        </div>
        <section class="bg-primary-1000 py-4">
            <h2 class="section-title text-center bg-title about my-3">Mandi Saville</h2>
            <div class="container grid-2col">
                <div class="grid-col">
                    <div class="profile-card">
                        <img class="profile-img" src="./assets/img/mandi-saville.jpg" alt="">
                        <div class="profile-card-body">
                            <h3 class="my-2">My Story</h3>
                            <p>My journey started in the Eyelash Industry in 2011, when I decided to take a course in Classic Lash Extensions at Pinewood TV Studios with the Award Winning Eyelash Emporium</p>
                            <a href="">More...</a>
                        </div>
                    </div>
                </div>
                <div class="grid-col">
                    <div class="profile-card">

                        <div class="profile-card-body">
                            <h4 class="my-2">Qualfications</h4>
                            <p>I am always training to give you the best level of professionalism that I take pride in. Keeping up to date is very important for me and ensures that you have the very best quality of treatments.</p>
                            <ul>
                                <li>Aesthetics</li>
                                <li>Eye Lash</li>
                                <li>Brows</li>
                            </ul>
                            <p>You can contact me if you have any further questions regarding my qualifications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section-divider my-3">
            <img src="./assets/img/icons/flower.svg" alt="">
        </div>
        <section class="my-3">
            <div class="cta-card">
                <!-- <img src="./assets/img/gallery/salon.jpg" alt=""> -->
                <div class="cta-card-body">
                    <div class="cta-card-text">
                        <h2 class="my-2">50% Off Micro Needling</h2>
                        <p>Extra discount when booking appointments through our website and paid for in full.*</p>
                        <a href="" class="btn-primary my-2">Book Now</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-primary py-4">
            <div class="container">
                <h2 class="section-title text-center bg-title treatments my-3">Some Of Our Popular Treatments</h2>
                <p class="text-center">This is a selection of our most popular treatments, you can find the full list on our services page <br><a href="">Services</a></p>

                <div class="grid-row-3col py-4">
                    <div class="service-card">
                        <h3 class="service-card-title my-2 text-center">Eyelash Extensions</h3>
                        <p class="service-card-service my-2 text-center">Classic Lashes</p>
                        <p class="service-card-price my-2 text-center">£40.00</p>
                        <a href="" class="btn-primary my-2">Book Now</a>
                    </div>
                    <div class="service-card">
                        <h3 class="service-card-title my-2 text-center">Brows</h3>
                        <p class="service-card-service my-2 text-center">Brow Lamination</p>
                        <p class="service-card-price my-2 text-center">£30.00</p>
                        <a href="" class="btn-primary my-2">Book Now</a>
                    </div>
                    <div class="service-card">
                        <h3 class="service-card-title my-2 text-center">Aesthetics</h3>
                        <p class="service-card-service my-2 text-center">Revolax Filler</p>
                        <p class="service-card-price my-2 text-center">£75.00</p>
                        <a href="" class="btn-primary my-2">Book Now</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="section-divider my-3">
            <img src="./assets/img/icons/flower.svg" alt="">
        </div>

        <section class="bg-primary py-4">
            <div class="container">
                <h2 class="section-title text-center bg-title reviews my-3">What our clients are saying</h2>

                <div class="slider review-slider">
                    <?php 
                    if($reviews_result_num >=1):
                    foreach($reviews as $review):
                            ?>
                        <div class="review-slider-review">
                            <div class="review-body">
                            
                                <div class="review-slider-body">
                                    <a href="<?=$review['reviews_author_url']; ?>" target = blank>
                                        <h3><?=$review['reviews_author_name']; ?></h3>
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
        <div class="section-divider my-3">
            <img src="./assets/img/icons/flower.svg" alt="">
        </div>
        <section class="">
            <div class="container">
                <h2 class="section-title text-center bg-title news my-3">Latest News & Offers</h2>
                <div class="grid-auto">
                    <?php
                    if (mysqli_num_rows($news) > 0) : ?>

                        <?php foreach ($news as $article) :
                            $news_article_body = html_entity_decode($article['news_articles_body']);
                            $news_articles_date = strtotime($article['news_articles_date']); 
                            if($article['news_articles_img']==""){
                                $article_img = $article_default_img;
                            } else{
                                $article_img = $article['news_articles_img'];
                            }?>
                            
                            <div class="card news-card">
                                <div class="card-header">
                                    <img src="../admin/assets/img/news/<?=$article_img;?>" alt="">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-body-title"><?=$article['news_articles_title'];?></h3>
                                    <div class="news-card-text">
                                        <?= $news_article_body; ?>

                                    </div>


                                    <a class="my-2" href="">Read More</a><br>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

        </section>
        <section class="my-4">
            <iframe width="100%" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJReBlEir510cRYIV3Yjs3hbk&key=AIzaSyD5e7plvKHapsDIODrl6JJ-j3qXvxPtw9Y">
            </iframe>
        </section>
    </main>

    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="assets/js/slick-init.js"></script>
    <?php include("inc/footer.inc.php"); ?>
</body>

</html>