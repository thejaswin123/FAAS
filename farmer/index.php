<?php
include '../resources/config.php';
if (validate_farmer_login()) { 
    redirect("../farmer-login.php"); 
}
include 'include/header.php';
include 'include/side-nav.php';
include 'include/top-nav.php';
get_page();
include 'include/footer.php';
?>