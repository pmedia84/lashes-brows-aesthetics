<nav class="nav-container">
    <div class="nav-brand">
        <img src="assets/img/logo/logo.png" alt="">
    </div>

    <div class="nav-banner">
        <div class="nav-menu" id="nav-menu">
            <ul class="nav-links">
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "index")){echo"link-active";}?>" href="index">Home</a></li>
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "price_list")){echo"link-active";}?>" href="price_list">Price List</a></li>
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "aesthetics")){echo"link-active";}?>" href="aesthetics_treatments">Aesthetics</a></li>
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "lashes")){echo"link-active";}?>" href="lashes_and_brows">Lashes & Brows</a></li>
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "news")){echo"link-active";}?>" href="news">News</a></li>
                <!-- <li><a class="nav-links-item" href="contact">Contact</a></li> -->
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "about")){echo"link-active";}?>" href="about">About Me</a></li>
                
            </ul>
        </div>
        <button class="nav-btn" aria-controls="nav-menu" id="nav-btn" type="button">
            <svg class="hamburger" viewBox="0 0 100 100" width="50">
                <rect class="line top" width="80" height="5" x="10" y="25" rx="2.5"></rect>
                <rect class="line middle" width="80" height="5" x="10" y="45" rx="2.5"></rect>
                <rect class="line bottom" width="80" height="5" x="10" y="65" rx="2.5"></rect>

            </svg>
        </button>
    </div>
</nav>
