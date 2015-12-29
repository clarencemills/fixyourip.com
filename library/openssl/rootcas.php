<?php
set_include_path ("/var/www/html/fixyourip.com/");
include 'includes/header_rootcas.inc';
include 'library/includes/library_header.inc';

echo "<center>";
echo "<table width=50%>";
echo "<tr>";
	echo "<td align=left>";
		echo "<h3>Trusted Root Certificates</h3>";
		echo "<br>";
	echo "</td>";	
echo "</tr>";

echo "<tr>";
        echo "<td align=left>";
?>

<?php

include 'library/openssl/root.html';
?>

<?php
        echo "</td>";
echo "</tr>";
echo "</table>";

include 'includes/cert_lookup.inc';
echo "<br>";
include 'includes/adds/google_add.inc';
echo "</center>";
include 'includes/footer.inc';
?>
