<?php
set_include_path ("/var/www/html/fixyourip.com/");
$choice = $_POST["tool_option"];

if ($choice == "zonecheckreport") {
	set_include_path ("/var/www/html/fixyourip.com/");
        include 'includes/reports.inc';
        include 'includes/page_header.inc';
	$name = $_POST["zonecheckreport"];

                echo "<pre>";
		echo shell_exec('/usr/bin/zonecheck --verbose=i,x,d '.$name.'');
		echo "</pre>";

	include 'includes/page_footer.inc';
        include 'includes/lookups.inc';
        include 'includes/add1.inc';
        include 'includes/footer.inc';
        echo "</center>";
}

?>
