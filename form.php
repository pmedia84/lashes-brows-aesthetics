<?php
//connect to db
include("connect.php");
//page meta variables
$meta_description = "Pre booking consultation form";
$meta_page_title = "Pre consultation form";
include("./inc/settings.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="canonical" href="https://<?= $domain_name; ?>/form">
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
                    <h1>Pre Consultation Form</h1>
                    <p>Please complete this form before your first treatment.</p>
                </div>
            </div>
        </section>
        <section class="my-3">

            <div class="container">
                <h2 class="section-title text-center">Consultation form</h2>
                <script type="text/javascript" src="https://form.jotform.com/jsform/231927324501349"></script>
            </div>
        </section>
    </main>

    <?php include("inc/footer.inc.php"); ?>
</body>

</html>