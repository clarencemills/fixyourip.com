<?php

include '/includes/tools_header.inc';

echo "<center>";
echo "<table width=50%>";
echo "<tr>";
echo "<td align=left>";
include 'includes/adds/google_add.inc';
echo "<table cellspacing=10>";
	echo "<tr valign=bottom>";
	echo "<td>";
		echo "<font size=6><b>FixYourIP</b></font>";
	echo "</td>";
	echo "<td>";
		echo "<font size=3><b><a href=/index.php>Home</a></b></font>";
	echo "</td>";
	echo "<td>";
		echo "<font size=3><b><a href=/tools>Tools</a></b></font>";
	echo "</td>";
	echo "<td>";
		echo "<font size=3><b><a href=/aboutus.php>About Us</a></b></font>";
	echo "</td>";
	echo "<td>";
		echo "<font size=3><b><a href=/library/>Library</a></b></font>";
	echo "</td>";
	echo "<td>";
		echo "<font size=3><b><a href=/reports/>Reports</a></b></font>";
	echo "</td>";
	echo "</tr>";
echo "</table>";
echo "<br>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</center";

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
