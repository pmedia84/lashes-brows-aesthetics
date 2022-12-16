<?php
 include("../connect.php");
//loading page script
if (isset($_GET['action'])) {
    if ($_GET['action'] == "load-price-list") {
        //define category variables
        
        //load table with categories
        $categories = "SELECT * FROM services_categories";
        $categories_result =mysqli_query($db, $categories);
        if(mysqli_num_rows($categories_result)>0){
            foreach($categories_result as $category){
                echo '<h3>'.$category['service_cat_name'].'</h3>';
        //find service
        $services = "SELECT * FROM services WHERE service_category ='{$category['service_cat_name']}'";
        $services_result = mysqli_query($db, $services);
        if(mysqli_num_rows($services_result)>0){
            foreach($services_result as $service){
                
                echo 

                    '
                    <div class="price-list-item">
                        <h4>'.$service['service_name'].' <span>&#163;'.$service['service_price'].'</h4>
                        <p>'.$service['service_description'].'</p>
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
    
    if($_POST['action']=="price_list_search") {
        if($_POST['search']==""){
                    //load table with categories
        $categories = "SELECT * FROM services_categories";
        $categories_result =mysqli_query($db, $categories);
        if(mysqli_num_rows($categories_result)>0){
            foreach($categories_result as $category){
        //find service
        $services = "SELECT * FROM services WHERE service_category ='{$category['service_cat_name']}'";
        $services_result = mysqli_query($db, $services);
        if(mysqli_num_rows($services_result)>0){
            foreach($services_result as $service){
                echo '<h3>'.$category['service_cat_name'].'</h3>';
                echo 

                    '
                    <div class="price-list-item">
                        <h4>'.$service['service_name'].' <span>&#163;'.$service['service_price'].'</h4>
                        <p>'.$service['service_description'].'</p>
                    </div>
                    
                    ';
            }   
        }
            }
        }
        }else{
        //define category
        $search= mysqli_real_escape_string($db, $_POST['search']);
        //find services details
        $services = "SELECT * FROM services WHERE service_category LIKE '%".$search."%' OR service_name LIKE '%".$search."%'OR service_description LIKE '%".$search."%' ";
        $services_result =mysqli_query($db, $services);
        $result_num = mysqli_num_rows($services_result);
        if(mysqli_num_rows($services_result)>0){
            $result_num = mysqli_num_rows($services_result);
            if($result_num>0){
                echo '<p>'.$result_num.' Service found matching '.$search.'</p>';
            }
            if($result_num<=0){
                echo '<p>'.$result_num.' Service found matching '.$search.'</p>';
            }
            foreach($services_result as $service){
                echo 
                    '
                    <div class="price-list-item">
                        <h4>'.$service['service_name'].' <span>&#163;'.$service['service_price'].'</h4>
                        <p>'.$service['service_description'].'</p>
                    </div>
                    
                    ';
            }   
        }else{
            echo '<p>'.$result_num.' Service found matching '.$search.'</p>';
        }
        }

    }
}

//price list controls from POST request Filter Select
if (isset($_POST['action'])) {
    
    if($_POST['action']=="price_list_filter") {
        if($_POST['search']==""){
                    //load table with categories
        $categories = "SELECT * FROM services_categories";
        $categories_result =mysqli_query($db, $categories);
        if(mysqli_num_rows($categories_result)>0){
            foreach($categories_result as $category){
        //find service
        $services = "SELECT * FROM services WHERE service_category ='{$category['service_cat_name']}'";
        $services_result = mysqli_query($db, $services);
        if(mysqli_num_rows($services_result)>0){
            foreach($services_result as $service){
                echo '<h3>'.$category['service_cat_name'].'</h3>';
                echo 

                    '
                    <div class="price-list-item">
                        <h4>'.$service['service_name'].' <span>&#163;'.$service['service_price'].'</h4>
                        <p>'.$service['service_description'].'</p>
                    </div>
                    
                    ';
            }   
        }
            }
        }
        }else{
        //define category
        $search= mysqli_real_escape_string($db, $_POST['search']);
        //find services details
        $services = "SELECT * FROM services WHERE service_category LIKE '%".$search."%' OR service_name LIKE '%".$search."%' ";
        $services_result =mysqli_query($db, $services);
        $result_num = mysqli_num_rows($services_result);
        if(mysqli_num_rows($services_result)>0){
            $result_num = mysqli_num_rows($services_result);
            if($result_num>0){
                echo '<p>'.$result_num.' Service\'s found in '.$search.'</p>';
            }
            if($result_num<=0){
                echo '<p>'.$result_num.' Service\'s found in '.$search.'</p>';
            }
            foreach($services_result as $service){
                echo 
                    '
                    <div class="price-list-item">
                        <h4>'.$service['service_name'].' <span>&#163;'.$service['service_price'].'</h4>
                        <p>'.$service['service_description'].'</p>
                    </div>
                    
                    ';
            }   
        }else{
            echo '<p>'.$result_num.' Service\'s found in '.$search.'</p>';
        }
        }

    }
}
?>


