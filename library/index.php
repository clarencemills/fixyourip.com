<?php
set_include_path ("/var/www/html/fixyourip.com/");
include 'includes/header.inc';
include 'includes/library_header.inc';

echo "<center>";
echo "<table width=50%>";
echo "<tr>";
	echo "<td align=left>";
		echo "<h3>Library </h3>";
	echo "</td>";	
echo "</tr>";

echo "<tr>";
	echo "<td align=left>";
		echo "<font size=4>DNS</font>";
                echo "<ul>";
		echo "<li><a href=/library/dns/dns.php>DNS Records</a><br>";
		echo "<li><a href=/library/dns/publicdnsservers.php>Public DNS Servers</a><br>";
		echo "<li><a href=/library/dns/whois.php>Whois</a><br><br>";
		echo "</ul>";
	echo "</td>";
echo "</tr>";
echo "<tr>";
        echo "<td align=left>";
                echo "<font size=4>IP FAQS</font>";
                echo "<ul>";
                echo "<li><a href=/library/ports>Internet Ports</a>";
                echo "<li><a href=/library/fixyourip.php>Fixyourip</a>";
                echo "<li><a href=/library/cisco/index.php>Cisco commands</a><br><br>";
                echo "</ul>";
        echo "</td>";
echo "</tr>";
echo "<tr>";
	echo "<td align=left>";
		echo "<font size=4>SSL</font>";
		echo "<ul>";
		echo "<li><a href=/library/openssl/rootcas.php>Root Certificate Authority</a>";
		echo "<li><a href=/library/openssl/certificates.php>Types of Certificate</a>";
		echo "<li><a href=/library/openssl/openssl_howto.php>OPENSSL Howto</a>";
		echo "<li><a href=/library/openssl/ssl_errors.php>SSL Errors revealed</a>";
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