<?php
set_include_path ('.:../includes:../../includes');
include 'header_ip.inc';

echo "<center>";
echo "<table width=50%>";
echo "<tr>";
        echo "<td align=left>";
                include 'adds/google_add.inc';
                echo "<br>";
                echo "<table cellspacing=10>";
                echo "<tr valign=bottom>";
			echo "<td>";
                                echo "<font size=6><b>FixYourIP</font>";
                        echo "</td>";
			echo "<td>";
                                echo "<font size=3><b><a href=/index.php>Home</a></b></font>";
                        echo "</td>";
			echo "<td>";
                                echo "<font size=3><b><a href=/tools/index.php>Tools</a></b></font>";
                        echo "</td>";
                        echo "<td>";
                                echo "<font size=3><b><a href=/aboutus.php>About</a></b></font>";
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
                print ('<b>YourIP:</b> '.$_SERVER['REMOTE_ADDR'].'');
                echo "<br>";
                echo "<b>Hostname: </b>";
                echo  shell_exec('dig -4 +short -x '.$_SERVER['REMOTE_ADDR'].'');
		echo "<br><br>";
        echo "</td>";
        echo "<td>";
echo "</tr>";
echo "</table>";
echo "</center";

echo "<center>";
echo "<table width=50%>";

echo "<tr>";
	echo "<td align=left>";
                echo "<form action=/net_resolve.php method=post>";
                echo "<h4>IP Owner</h4>";
                echo "Enter IP address";
                echo "<br>";
                echo "<input type=text name=ip>";
                echo "<input type=hidden name=tool_option value=ipcheck>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
	echo "</td>";
	echo "<td align=left>";
                echo "<form action=/net_resolve.php method=post>";
                echo "<h4>Lookup ASN Info</h4>";
                echo "Enter IP Address";
                echo "<br>";
                echo "<input type=text name=ip>";
                echo "<input type=hidden name=tool_option value=asn>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
        echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td align=left>";
	echo "<form action=/net_resolve.php method=post>";
               echo "<h4>Realtime Block list (RBL) Check </h4>";
               echo "Enter IP";
               echo "<br>";
               echo "<input type=text name=ip>";
               echo "<input type=hidden name=tool_option value=rbllookup>";
               echo "<input type=submit value=check>";
               echo "<br><br>";
               echo "</form>";
	echo "</td>";
	echo "<td align=left>";
                echo "<form action=/net_resolve.php method=post>";
                echo "<h4>Ping IP or hostname</h4>";
                echo "Enter IP or Hostname";
                echo "<br>";
                echo "<input type=text name=ip>";
                echo "<input type=hidden name=tool_option value=ping>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
        echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td align=left>";
                echo "<form action=/net_resolve.php method=post>";
                echo "<h4>Reverse IP Address Lookup </h4>";
                echo "Check if your IP has a reverse DNS entry";
                echo "<br>";
                echo "<input type=text name=ip>";
                echo "<input type=hidden name=tool_option value=reverseip>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
	echo "</td>";
	echo "<td align=left>";
		echo "<form action=/net_resolve.php method=post>";
		echo "<h4>IP Routing Lookup in RADB database</h4>";
		echo "Enter IP address, CIDR Notation, ASN number";
		echo "<br>";
		echo "<input type=text name=ip>";
                echo "<input type=hidden name=tool_option value=route>";
		echo "<input type=submit value=check>";
		echo "<br><br>";
		echo "</form>";
	echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td align=left>";
                echo "<form action=/net_resolve.php method=post>";
                echo "<h4>TraceRoute </h4>";
                echo "Trace packets from this host";
                echo "<br>";
                echo "<input type=text name=ip>";
                echo "<input type=hidden name=tool_option value=trace>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
	echo "</td>";
	echo "<td align=left>";
               echo "<form action=/net_resolve.php method=post>";
                echo "<h4>Scan IP</h4>";
                echo "Enter IP or hostname";
                echo "<br>";
                echo "<input type=text name=ip>";
                echo "<input type=hidden name=tool_option value=scan>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
        echo "</td>";
echo "</tr>";

echo "<tr>";
        echo "<td align=left>";
                echo "<form action=/net_resolve.php method=post>";
                echo "<h4> Zonecheck </h4>";
                echo "DNS Zone check";
                echo "<br>";
                echo "<input type=text name=zone>";
                echo "<input type=hidden name=tool_option value=zone>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
        echo "</td>";
	echo "<td align=left>";
                echo "<form action=/net_resolve.php method=post>";
                echo "<h4>Find Contact/Abuse </h4>";
                echo "Enter Domain (FQDN)";
                echo "<br>";
                echo "<input type=text name=abuse>";
                echo "<input type=hidden name=tool_option value=abuse>";
                echo "<input type=submit value=check>";
                echo "<br><br><br>";
                echo "</form>";
        echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td align=left colspan=2>";
echo "</tr>";

echo "<tr>";
	echo "<td colspan=2>";
	echo "</td>";
echo "</tr>";
echo "</table>";

include 'lookups.inc';
echo "<br>";

include 'includes/add1.inc';
echo "</center>";
include 'footer.inc';
?>
