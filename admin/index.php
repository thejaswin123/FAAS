<?php
include '../resources/config.php';
validate_admin_login();
include 'include/header.php';
include 'include/side-nav.php';
include 'include/top-nav.php';
get_page();
include 'include/footer.php';
?>