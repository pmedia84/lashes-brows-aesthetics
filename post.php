<?php
//connect to db
include("connect.php");
$article_id = $_GET['article_id'];
$article_q = $db->query('SELECT * FROM news_articles WHERE news_articles_id=' . $article_id);
$article_r = mysqli_fetch_assoc($article_q);
$news_q = $db->query('SELECT * FROM news_articles  ORDER BY news_articles_id LIMIT 3');
include("./inc/settings.php");
//page meta variables
$meta_description = "Find out about my latest news and special offers.";
$meta_page_title = $article_r['news_articles_title'];
//sort article image and set up a default if none has been supplied
$article_img = $article_r['news_articles_img'];
if($article_img ==""){
    $og_img="https://".$_SERVER['SERVER_NAME']."/assets/img/og-data/news-item.webp";
}else{
    $og_img="https://".$_SERVER['SERVER_NAME']."/assets/img/og-data/".$article_img;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./inc/Page_meta.php");?>
    <link rel="canonical" href="https://<?= $_SERVER['SERVER_NAME']; ?>/<?= strtolower(str_replace(" ", "-", $article_r['news_articles_title'])); ?>">
    <title><?= $article_r['news_articles_title']; ?></title>
</head>

<body>
    <!-- Nav Bar -->
    <?php include("inc/nav.inc.php"); ?>
    <!-- Hero -->
    <main>
        <section class="hero std-hero post-hero" style="background-image:url('assets/img/news/<?php if ($article_r['news_articles_img'] ==""){echo "news-item.webp";} else{echo $article_r['news_articles_img'];}?>');">
            <div class="container hero-grid">
                <div class="hero-text">
                    <h1><?= $article_r['news_articles_title']; ?></h1>
                </div>
            </div>
        </section>
    
        <section class="post-body mb-2">
            <h2 class="section-title text-center my-3"><?= $article_r['news_articles_title']; ?></h2>
            <div class="">
                <?= htmlspecialchars_decode($article_r['news_articles_body']); ?>
            </div>
        </section>
<section class="container my-3">
    <h2 class="text-center my-3">Other Posts</h2>
    <div class="grid-row-3col">
                <?php if ($news_q->num_rows > 0) : ?>
                    <?php foreach ($news_q as $article) :
                        $news_article_body = html_entity_decode($article['news_articles_body']);
                        $news_articles_date = strtotime($article['news_articles_date']);
                        if ($article['news_articles_img'] == "") {
                            $article_img = $article_default_img;
                        } else {
                            $article_img = $article['news_articles_img'];
                        } ?>

                        <div class="card news-card">
                            <div class="card-header">
                                <a href="post?article_id=<?=$article['news_articles_id'];?>"><img src="../admin/assets/img/news/<?= $article_img; ?>" alt=""></a>
                            </div>
                            <div class="card-body">
                                <a href="post?article_id=<?=$article['news_articles_id'];?>">
                                    <h3 class="card-body-title"><?= $article['news_articles_title']; ?></h3>
                                </a>
                                <p><?= date('d M Y', $news_articles_date); ?></p>
                                <div class="news-card-text">
                                    <?= $news_article_body; ?>

                                </div>
                                <a class="my-2" href="post?article_id=<?=$article['news_articles_id'];?>">Read More</a><br>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
</section>
    </main>
    <?php include("inc/footer.inc.php"); ?>
</body>

</html>