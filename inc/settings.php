<?php
//email settings for contact forms
//Settings for all form scripts
/// Define who the emails get sent to from forms filled out
$email_to = "";

$host = ""; /// Hostname
$username = ""; ///Username
$pass = ""; /// Password
$from = $username; ///Email

$fromname = ""; /// Username and how you want your name to be displayed on emails
$emailheaderlogo = "";//logo url for inserting into the top of email bodies

//Contact details: Phone number, email address etc
include("./connect.php");
//connect to db and declare business details etc
//find business details.
$business_id = "11";
$business = $db->prepare('SELECT * FROM business WHERE business_id =' . $business_id);

$business->execute();
$business->store_result();
$business->bind_result($business_id, $business_name, $address_id, $business_phone, $business_email, $business_contact_name);
$business->fetch();
$business->close();
$facebookurl = "";

//find address details
$address = $db->prepare('SELECT * FROM addresses WHERE address_id='.$address_id);

$address->execute();
$address->store_result();
$address->bind_result($address_id, $address_line_1, $address_line_2, $address_line_3, $address_county, $address_pc);
$address->fetch();
$address->close();

//find social media account details
$socials_query = ('SELECT business_socials.business_socials_id, business_socials.socials_type_id, business_socials.business_socials_url, business_socials.business_id, business_socials_types.socials_type_id, business_socials_types.socials_type_name, business_socials_types.socials_type_icon    FROM business_socials  NATURAL LEFT JOIN business_socials_types WHERE  business_id='.$business_id);
$socials = $db->query($socials_query);
$socials_result_num = $socials->num_rows;

//News articles 
//set up a default image if no image has been chosen when the article was made
$article_default_img = "news-item.webp";
?>

