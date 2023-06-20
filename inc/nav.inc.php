<nav class="nav-container">
    <div class="nav-brand">
        <img itemprop="logo" src="assets/img/logo/logo.webp" alt="" height="150px">
    </div>

    <div class="nav-banner">
        <div class="nav-menu" id="nav-menu">
            <ul class="nav-links">
                <li><a class="nav-links-item <?php if($_SERVER['REQUEST_URI']== "/" || str_contains($_SERVER['REQUEST_URI'], "index")  ){echo"link-active";}?>" href="index">Home</a></li>
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "price_list")){echo"link-active";}?>" href="price_list">Price List</a></li>
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "aesthetics")){echo"link-active";}?>" href="aesthetics-treatments-sutton-bridge">Aesthetics</a></li>
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "lashes")){echo"link-active";}?>" href="lashes-and-brows-in-sutton-bridge">Lashes & Brows</a></li>
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "news")){echo"link-active";}?>" href="news">News</a></li>
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "contact")){echo"link-active";}?>" href="contact">Contact</a></li>
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "about")){echo"link-active";}?>" href="about">About Me</a></li>
                <li><a class="nav-links-item <?php if(str_contains($_SERVER['REQUEST_URI'], "policies")){echo"link-active";}?>" href="policies">Policies</a></li>
                
            </ul>
        </div>
        <button class="nav-btn" aria-controls="nav-menu" id="nav-btn" type="button" aria-label="Navigation Button">
            <svg class="hamburger" viewBox="0 0 100 100" width="50">
                <rect class="line top" width="80" height="5" x="10" y="25" rx="2.5"></rect>
                <rect class="line middle" width="80" height="5" x="10" y="45" rx="2.5"></rect>
                <rect class="line bottom" width="80" height="5" x="10" y="65" rx="2.5"></rect>

            </svg>
        </button>
    </div>
</nav>
