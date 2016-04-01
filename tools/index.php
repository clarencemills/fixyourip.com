<?php

include '/includes/tools_header.inc';
include '/tools/includes/toolsheader.inc';

echo "<center>";
echo "<table width=50%>";
echo "<tr>";
	echo "<td align=left>";
		echo "<h3>Tools </h3>";
	echo "</td>";	
echo "</tr>";

echo "<tr>";
	echo "<td align=left>";
                echo "<ul>";
		echo "<li><a href=/tools/dns_tools.php>DNS Tools</a><br>";
		echo "<li><a href=/tools/iptools.php>IP Tools</a><br>";
		echo "<li><a href=/tools/ssltools.php>SSL Tools</a><br>";
		echo "<li><a href=/index.php>General Tools</a><br>";
		echo "</ul>";
	echo "</td>";
echo "</tr>";

echo "<tr>";
        echo "<td align=left>";
        echo "</td>";
echo "</tr>";

echo "</table>";

include 'includes/lookups.inc';
echo "<br>";
include 'includes/adds/google_add.inc';
echo "</center>";
include 'includes/footer.inc';
?>
