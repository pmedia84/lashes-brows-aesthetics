
<?php
//price list controls from POST request Filter Select
if (isset($_POST['action']) && $_POST['action'] == "price_list_filter") :
    if ($_POST['service_cat_id'] == "") :
        include("../connect.php");
        //define category variables

        //load table with categories
        $cat_q = "SELECT * FROM services_categories";
        $cat_r = mysqli_query($db, $cat_q);
?>
        <?php if ($cat_r->num_rows > 0) : foreach ($cat_r as $cat) :
                $service_q = $db->query('SELECT * FROM services WHERE service_cat_id=' . $cat['service_cat_id']);
        ?>
                <h3><?= $cat['service_cat_name']; ?></h3>
                <?php foreach ($service_q as $service) : ?>
                    <div class="price-list-item">
                        <h4><?= $service['service_name']; ?><span>&#163;<?= $service['service_price']; ?></h4>
                        <p><?= $service['service_description']; ?></p>
                    </div>
                <?php endforeach; ?>
        <?php endforeach;
        endif; ?>
    <?php else :
    include("../connect.php");
        //define category
        $search = mysqli_real_escape_string($db, $_POST['service_cat_id']);
        //find services details
        $services_q = $db->query('SELECT * FROM services WHERE service_cat_id=' . $_POST['service_cat_id']);
        $result_num = mysqli_num_rows($services_q);
        //find the service name
        $category_q = $db->query('SELECT * FROM services_categories WHERE service_cat_id=' . $_POST['service_cat_id']);
        $category_r = mysqli_fetch_assoc($category_q);

    ?>
        <h3><?= $category_r['service_cat_name']; ?></h3>
        <?php foreach ($services_q as $service) : ?>
            <div class="price-list-item">
                <h4><?= $service['service_name']; ?><span>&#163;<?= $service['service_price']; ?></h4>
                <p><?= $service['service_description']; ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>

<?php if (isset($_POST['action']) && $_POST['action'] == "price_list_search") :
    if ($_POST['search'] == "") :
        ///return the result of the search box after keyup
        include("../connect.php");
        $search = mysqli_real_escape_string($db, $_POST['search']);
        //define category variables

        //load table with categories
        $cat_q = "SELECT * FROM services_categories";
        $cat_r = mysqli_query($db, $cat_q);
?>
        <?php if ($cat_r->num_rows > 0) : foreach ($cat_r as $cat) :
                $service_q = $db->query('SELECT * FROM services WHERE service_cat_id=' . $cat['service_cat_id']);
        ?>
                <h3><?= $cat['service_cat_name']; ?></h3>
                <?php foreach ($service_q as $service) : ?>
                    <div class="price-list-item">
                        <h4><?= $service['service_name']; ?><span>&#163;<?= $service['service_price']; ?></h4>
                        <p><?= $service['service_description']; ?></p>
                    </div>
                <?php endforeach; ?>
        <?php endforeach;
        endif; ?>

    <?php else :
    include("../connect.php");
        $search = mysqli_real_escape_string($db, $_POST['search']);
        $service_q = $db->query('SELECT services.service_name, services.service_description, services.service_cat_id, services.service_price, services_categories.service_cat_id, services_categories.service_cat_name FROM services LEFT JOIN services_categories ON services_categories.service_cat_id=services.service_cat_id WHERE services.service_name  LIKE "%' . $search . '%" ');
            $service_r = mysqli_fetch_assoc($service_q); ?>
            <p><?php echo mysqli_num_rows($service_q);?> Results found, matching <?=$search;?></p>
            <?php foreach ($service_q as $service) : ?>
                <h3><?= $service['service_cat_name']; ?></h3>
                
                <div class="price-list-item">
                    <h4><?= $service['service_name']; ?><span>&#163;<?= $service['service_price']; ?></h4>
                    <p><?= $service['service_description']; ?></p>
                </div>
            <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>