<?php
include("../connect.php");
//loading page script
if (isset($_GET['action']) && $_GET['action'] == "load-price-list1") {
    if ($_GET['action'] == "load-price-list") {
        //define category variables

        //load table with categories
        $categories = "SELECT * FROM services_categories";
        $categories_result = mysqli_query($db, $categories);
        if (mysqli_num_rows($categories_result) > 0) {
            foreach ($categories_result as $category) {
                echo '<h3>' . $category['service_cat_name'] . '</h3>';
                //find service
                $services = "SELECT * FROM services WHERE service_category ='{$category['service_cat_name']}'";
                $services_result = mysqli_query($db, $services);
                if (mysqli_num_rows($services_result) > 0) {
                    foreach ($services_result as $service) {

                        echo

                        '
                    <div class="price-list-item">
                        <h4>' . $service['service_name'] . ' <span>&#163;' . $service['service_price'] . '</h4>
                        <p>' . $service['service_description'] . '</p>
                    </div>
                    
                    ';
                    }
                }
            }
        }
    }
}



//price list controls from POST request search box
if (isset($_POST['action'])) {

    if ($_POST['action'] == "price_list_search1") {
        if ($_POST['search'] == "") {
            //load table with categories
            $categories = "SELECT * FROM services_categories";
            $categories_result = mysqli_query($db, $categories);
            if (mysqli_num_rows($categories_result) > 0) {
                foreach ($categories_result as $category) {
                    //find service
                    $services = "SELECT * FROM services WHERE service_category ='{$category['service_cat_name']}'";
                    $services_result = mysqli_query($db, $services);
                    if (mysqli_num_rows($services_result) > 0) {
                        foreach ($services_result as $service) {
                            echo '<h3>' . $category['service_cat_name'] . '</h3>';
                            echo

                            '
                    <div class="price-list-item">
                        <h4>' . $service['service_name'] . ' <span>&#163;' . $service['service_price'] . '</h4>
                        <p>' . $service['service_description'] . '</p>
                    </div>
                    
                    ';
                        }
                    }
                }
            }
        } else {
            //define category
            $search = mysqli_real_escape_string($db, $_POST['search']);
            //find services details
            $services = "SELECT * FROM services WHERE service_category LIKE '%" . $search . "%' OR service_name LIKE '%" . $search . "%'OR service_description LIKE '%" . $search . "%' ";
            $services_result = mysqli_query($db, $services);
            $result_num = mysqli_num_rows($services_result);
            if (mysqli_num_rows($services_result) > 0) {
                $result_num = mysqli_num_rows($services_result);
                if ($result_num > 0) {
                    echo '<p>' . $result_num . ' Service found matching ' . $search . '</p>';
                }
                if ($result_num <= 0) {
                    echo '<p>' . $result_num . ' Service found matching ' . $search . '</p>';
                }
                foreach ($services_result as $service) {
                    echo
                    '
                    <div class="price-list-item">
                        <h4>' . $service['service_name'] . ' <span>&#163;' . $service['service_price'] . '</h4>
                        <p>' . $service['service_description'] . '</p>
                    </div>
                    
                    ';
                }
            } else {
                echo '<p>' . $result_num . ' Service found matching ' . $search . '</p>';
            }
        }
    }
}

//price list controls from POST request Filter Select
if (isset($_POST['action'])) {

    if ($_POST['action'] == "price_list_filter1") {
        if ($_POST['search'] == "") {
            //load table with categories
            $categories = "SELECT * FROM services_categories";
            $categories_result = mysqli_query($db, $categories);
            if (mysqli_num_rows($categories_result) > 0) {
                foreach ($categories_result as $category) {
                    //find service
                    $services = "SELECT * FROM services WHERE service_category ='{$category['service_cat_name']}'";
                    $services_result = mysqli_query($db, $services);
                    if (mysqli_num_rows($services_result) > 0) {
                        foreach ($services_result as $service) {
                            echo '<h3>' . $category['service_cat_name'] . '</h3>';
                            echo

                            '
                    <div class="price-list-item">
                        <h4>' . $service['service_name'] . ' <span>&#163;' . $service['service_price'] . '</h4>
                        <p>' . $service['service_description'] . '</p>
                    </div>
                    
                    ';
                        }
                    }
                }
            }
        } else {
            //define category
            $search = mysqli_real_escape_string($db, $_POST['search']);
            //find services details
            $services = "SELECT * FROM services WHERE service_category LIKE '%" . $search . "%' OR service_name LIKE '%" . $search . "%' ";
            $services_result = mysqli_query($db, $services);
            $result_num = mysqli_num_rows($services_result);
            if (mysqli_num_rows($services_result) > 0) {
                $result_num = mysqli_num_rows($services_result);
                if ($result_num > 0) {
                    echo '<p>' . $result_num . ' Service\'s found in ' . $search . '</p>';
                }
                if ($result_num <= 0) {
                    echo '<p>' . $result_num . ' Service\'s found in ' . $search . '</p>';
                }
                foreach ($services_result as $service) {
                    echo
                    '
                    <div class="price-list-item">
                        <h4>' . $service['service_name'] . ' <span>&#163;' . $service['service_price'] . '</h4>
                        <p>' . $service['service_description'] . '</p>
                    </div>
                    
                    ';
                }
            } else {
                echo '<p>' . $result_num . ' Service\'s found in ' . $search . '</p>';
            }
        }
    }
}
?>

<?php if (isset($_GET['action']) && $_GET['action'] == "load-price-list") :
    ///loads price list on first page load
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
<?php endif; ?>

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