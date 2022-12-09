<footer>
    <div class="container py-3">
        
        <div class="footer-grid">
        <h2 class="brand-font footer-brand my-2"><?=$business_name;?></h2>
            <div class="footer-address">
            
                <address>
                    <p><?=$address_line_1;?></p>
                    <p><?=$address_line_2;?></p>
                    <p><?=$address_line_3;?></p>
                    <p><?=$address_county;?></p>
                    <p><?=$address_pc;?></p>
                </address>
            </div>
            <div class="footer-contact-details">
                <ul>
                    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:<?=$business_email;?>"><?=$business_email;?></a></li>
                    <li><i class="fa-solid fa-phone"></i> <a href="tel:+<?=$business_phone;?>"><?=$business_phone;?></a></li>
                </ul>
            
            </div>
            <div class="footer-socials">
                <h2>Follow Us:</h2>
                <ul>
                <?php if($socials_result_num >= 1):?>
                    <?php foreach($socials as $social):?>
                        <li><a href="http://<?=$social['business_socials_url'];?>" target="_blank" rel="noopener noreferrer"><?=$social['socials_type_icon'];?> <?=$social['socials_type_name'];?></a></li>
                    <?php endforeach;?>
                <?php endif;?>
                </ul>
            </div>
        </div>
        <div class="footer-creator-brand">
            <p class="footer-copyright">&copy; <?=$business_name; echo" ". date('Y')?> </p>
            <p>Website created by <a href="http://www.parrotmedia.co.uk" target="blank">Parrot Media</a></p>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function(){
        var pathname = window.location.href;
    $(".nav-links a").each(function(){
        if(this.href === pathname){
            $(this).addClass("link-active");
            console.log(pathname);
        }else(
            $(this).removeClass("link-active")
        )
    })
})
</script>
<script src="assets/js/app.js"></script>