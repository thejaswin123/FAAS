<?php

include '../resources/config.php';

if (validate_supplier_login()) 
{ 
	redirect("../supplier-login.php"); 
}

include 'include/header.php';

include 'include/side-nav.php';

include 'include/top-nav.php';

get_page();

include 'include/footer.php';

?>