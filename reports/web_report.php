<?php
set_include_path ("/var/www/html/fixyourip.com/");
$choice = $_POST["tool_option"];

if ($choice == "webreport") {
	set_include_path ("/var/www/html/fixyourip.com/");
        include 'includes/reports.inc';
        include 'includes/page_header.inc';
	$name = $_POST["web"];

                echo "<pre>";
		echo shell_exec('/usr/bin/webreport.sh '.$name.'');
		echo "</pre>";

	include 'includes/page_footer.inc';
        include 'includes/lookups.inc';
        include 'includes/add1.inc';
        include 'includes/footer.inc';
        echo "</center>";
}

?>
