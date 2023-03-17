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
    <title>About Us : Lashes Brows & Aesthetics</title>
</head>

<body>
    <!-- Nav Bar -->
    <?php include("inc/nav.inc.php"); ?>
    <!-- Hero -->
    <main>
        <section class="hero std-hero  price-hero">
            <div class="container hero-grid">
                <div class="hero-text">
                    <h1>Price List</h1>
                    <a class="btn-primary btn-cta my-3" href="">Book Now</a>
                </div>
            </div>
        </section>
        <section class="">
            <h2 class="section-title text-center bg-title my-3">Price List</h2>
            <p class="text-center section-subtitle my-3">All my services are listed here, if there is something you can't find then please get in touch.</p>
            <div class="container price-list-controls my-3 ">
                <form action="scripts/price_list.script.php" method="POST" id="price_list_search">
                    <div class="form-input-wrapper my-3">
                        <div class="search-input">
                            <input type="text" id="search" name="search" placeholder="Search For A Service ...">
                            <button class="btn-primary form-controls-btn loading-btn" type="submit"><i class="fa-solid fa-magnifying-glass" id="search-icon"></i></button>
                        </div>
                    </div>
                </form>
                <form id="category_search_filter" action="./scripts/guest_list.script.php" method="POST">

                    <div class="form-input-wrapper">
                        <label for="user_email">Filter By Category</label>
                        <select class="form-select" name="service_cat_id" id="search_filter">
                            <option value="" selected>View All</option>
                            <?php
                            $categories_query = ('SELECT * FROM services_categories');
                            $categories = $db->query($categories_query);
                            ?>
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category['service_cat_id']; ?>"><?= $category['service_cat_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
            </div>


            <div class="container my-3">


                

                <div class="price-list" id="price-list">

                </div>

            </div>



        </section>













    </main>


    <?php include("inc/footer.inc.php"); ?>
</body>
<script>
    $(document).ready(function() {
        url = "scripts/price_list.script.php?action=load-price-list";
        $.ajax({ //load price list
            type: "GET",
            url: url,
            encode: true,
            success: function(data, responseText) {
                $("#price-list").html(data);


            }
        });
    })
</script>

<script>

        //script for searching for loading price list
        $("#price_list_search").on('keyup submit', function(event) {
        event.preventDefault();
        var formData = new FormData($("#price_list_search").get(0));
        formData.append("action", "price_list_search");
        $.ajax({ //start ajax post
            type: "POST",
            url: "scripts/price_list.script.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data, responseText) {
                $("#price-list").html(data);
            }
        });

    });

            //script for searching for loading price list
            $("#category_search_filter").on('change', function(event) {
        event.preventDefault();
        var formData = new FormData($("#category_search_filter").get(0));
        formData.append("action", "price_list_filter");
        $.ajax({ //start ajax post
            type: "POST",
            url: "scripts/price_list.script.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data, responseText) {
                $("#price-list").html(data);
            }
        });

    });
</script>
</html>