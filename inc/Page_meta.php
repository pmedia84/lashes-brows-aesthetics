<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="<?= $meta_description; ?>" />
<title><?= $meta_page_title; ?></title>

<!-- Theme Color for safari and mobile browsers -->
<meta name="theme-color" content="#7E688C" />
<!-- OG Meta Tags -->
<meta property="og:title" content="<?= $og_title_content = $meta_page_title; ?>" />
<meta property="og:description" content="<?= $og_title_content = $meta_description; ?>" />
<meta property="og:image" content="<?=$og_img;?>" />
<meta property="og:url" content="<?= $og_title_content; ?>" />
<meta property="og:type" content="Website" />
<noscript>
  <div class="alert-card container">
    <h2>Warning</h2>
    <p>Our website uses Javascript to function correctly. Javascript appears to not be enabled on your browser.</p>
    <p>Please check your settings and refresh our website.</p>
  </div>
</noscript>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "BeautySalon",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Sutton Bridge",
    "addressRegion": "Lincolnshire",
    "postalCode": "PE12 9UH",
    "streetAddress": "Salon One, 1 High Street"
  },
  "name": "Lashes, Brows & Aesthetics",
  "openingHours": [
    "Mo-Fr 09:00-17:00"
  ],
  "telephone": "07827 962740",
  "url": "https://www.lashesbrowsandaesthetics.co.uk"
}
</script>
<script id="timelyScript" src="//book.gettimely.com/widget/book-button-v1.5.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/css/styles.css">
<!-- Google Recaptcha -->
<script src="https://www.google.com/recaptcha/api.js?render=6LdHtLwlAAAAAEuX7k_J0hlgq3MsyC2On2Ouc9JG" async="false"></script>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Imperial+Script&family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Playfair+Display&display=swap" rel="stylesheet">
<!-- Preload the LCP image with a high fetchpriority so it starts loading with the stylesheet. -->
<link rel="preload" fetchpriority="high" as="image" href="/assets/img/hero/hero.webp" type="image/webp">