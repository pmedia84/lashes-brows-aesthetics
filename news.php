<?php
//connect to db
include("connect.php");
$total_articles = $db->query('SELECT COUNT(*) FROM news_articles')->fetch_row()[0];
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
$num_results_on_page = 6;
if ($news = $db->prepare('SELECT * FROM news_articles ORDER BY news_articles_id LIMIT ?,?')) {
    // Calculate the page to get the results we need from our table.
    $calc_page = ($page - 1) * $num_results_on_page;
    $news->bind_param('ii', $calc_page, $num_results_on_page);
    $news->execute();
    // Get the results...
    $news_r = $news->get_result();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("inc/header.inc.php"); ?>

    <title>Latest News and Offers From Lashes Brows & Aesthetics Sutton Bridge</title>
    <meta name="description" content="Find out about my latest news and special offers.">
    <link rel="canonical" href="https://<?= $domain_name; ?>/news-and-special-offers">
</head>

<body>
    <!-- Nav Bar -->
    <?php include("inc/nav.inc.php"); ?>
    <!-- Hero -->
    <main>
        <section class="hero std-hero">
            <div class="container hero-grid">
                <div class="hero-text">
                    <h1>Latest News and Offers</h1>
                    <p>Keep up to date with my latest news and any special offers.</p>
                    <?=$book_now_btn_cta;?>
                </div>
            </div>
        </section>
        <div class="container my-3">
            <h2 class="section-title text-center">Latest News</h2>
        </div>
        <section class="container my-2">
            <div class="grid-row-3col">
                <?php if ($news_r->num_rows > 0) : ?>
                    <?php foreach ($news_r as $article) :
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
            <?php if (ceil($total_articles / $num_results_on_page) > 0) : ?>
                <nav aria-label="news navigation">
                    <ul class="pagination" role="list">
                        <?php if ($page > 1) : ?>
                            <li class="pagination-prev" id="prev"><a class="" href="news?page=<?php echo $page - 1 ?>" aria-label="Previous" data-page="-1"><span aria-hidden="true">&#10094;</span></a></li>
                        <?php endif; ?>

                        <?php if ($page > 3) : ?>
                            <li class="start"><a href="news?page=1">1</a></li>
                            <li class="dots"><i class="fa-solid fa-ellipsis"></i></li>
                        <?php endif; ?>

                        <?php if ($page - 2 > 0) : ?><li class="page"><a href="news?page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li><?php endif; ?>
                        <?php if ($page - 1 > 0) : ?><li class="page"><a href="news?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li><?php endif; ?>

                        <li class="currentpage"><a href="news?page=<?php echo $page ?>"><?php echo $page ?></a></li>
                        <?php if ($page + 1 < ceil($total_articles / $num_results_on_page) + 1)  : ?><li class="page"><a href="news?page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a></li><?php endif; ?>
                        <?php if ($page + 2 < ceil($total_articles / $num_results_on_page) + 1) : ?><li class="page"><a href="news?page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li><?php endif; ?>

                        <?php if ($page < ceil($total_articles / $num_results_on_page) - 2) : ?>
                            <li class="dots"><i class="fa-solid fa-ellipsis"></i></li>
                            <li class="end"><a href="news?page=<?php echo ceil($total_articles / $num_results_on_page) ?>"><?php echo ceil($total_articles / $num_results_on_page) ?></a></li>
                        <?php endif; ?>
                        <?php if ($page < ceil($total_articles / $num_results_on_page)) : ?>
                            <li class="pagination-next" id="next"><a class="" href="news?page=<?php echo $page + 1 ?>" aria-label="Next" data-page="+1"><span aria-hidden="true">&#10095;</span></a></li>
                        <?php endif; ?>

                    </ul>
                </nav>
            <?php endif; ?>
        </section>
    </main>
    <?php include("inc/footer.inc.php"); ?>
</body>

</html>