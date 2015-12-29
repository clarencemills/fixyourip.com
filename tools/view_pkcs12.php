<?php
$pass = $_POST["passwd"];
set_include_path ("/var/www/html/fixyourip.com/");

$target = "/tmp/";
 $target = "$target" . basename( $_FILES['file']['name']) ;
 $ok=1;
 if(move_uploaded_file($_FILES['file']['tmp_name'], "$target"))
 {
        set_include_path ("/var/www/html/fixyourip/");
        include 'includes/header.inc';
        include 'includes/page_header.inc';

        echo "<pre>";
        echo shell_exec('/usr/bin/display_pkcs12cert.sh '.$target.' '.$pass);
        echo "</pre>";

        include 'includes/page_footer.inc';
        include 'includes/lookups.inc';
        include 'includes/add1.inc';
        include 'includes/footer.inc';
        echo "</center>";
 }
 else {
        set_include_path ("/var/www/html/fixyourip/");
        include 'includes/header.inc';
        include 'includes/page_header.inc';

         echo "Sorry, there was a problem uploading your file.";

        include 'includes/page_footer.inc';
        include 'includes/lookups.inc';
        include 'includes/add1.inc';
        include 'includes/footer.inc';
        echo "</center>";
 }

?>
