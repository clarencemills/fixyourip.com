<?php
set_include_path ("/var/www/html/fixyourip.com/");
include 'includes/header.inc';

echo "<center>";
echo "<table width=50%>";
echo "<tr>";
        echo "<td align=left>";
                include 'includes/adds/google_add.inc';
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
                                echo "<font size=3><b><a href=/tools>Tools</a></b></font>";
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
		echo "<g:plusone></g:plusone>";
        echo "</td>";
        echo "<td>";
echo "</tr>";
echo "</table>";
echo "</center";

echo "<center>";
echo "<table width=50%>";
echo "<tr>
	<td align=left>";
                echo "<h4>DNS Lookup - enter your FQDN)</h4>";
                echo "Lookup A, MX, SOA, txt, cname records<br>";
		echo "<form action=resolve_dns.php method=post>";
		echo "<input type=text name=ip>";
		echo "<select name=dns_options>";
			echo "<option value=a>A </option>";
			echo "<option value=mx>MX </option>";
			echo "<option value=cname>CNAME</option>";
			echo "<option value=ns>NS </option>";
			echo "<option value=soa>SOA </option>";
			echo "<option value=txt>TXT </option>";
			echo "<option value=aaaa>AAAA </option>";
			echo "<option value=ptr>PTR </option>";
			echo "<option value=hinfo>Hinfo </option>";
			echo "<option value=srv>SRV </option>";
			echo "<option value=any>Any </option>";
			echo "<option value=all>All </option>";
		echo "</select>";
		echo "<input type=submit value=check>";
                echo "<br><br>";
		echo "</form>";
	echo "</td>";	
	echo "<td align=left>";
                echo "<form action=net_resolve.php method=post>";
                echo "<h4>Advanced Whois Lookup</h4>";
                echo "IP or Domain<br>";
                echo "<input type=text name=whois>";
                echo "<input type=hidden name=tool_option value=whois>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
        echo "</td>";
echo "</tr>";

echo "<tr>";
	echo "<td align=left>";
                echo "<form action=net_resolve.php method=post>";
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
                echo "<form action=net_resolve.php method=post>";
                echo "<h4>Get ASN Info</h4>";
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
	echo "<form action=net_resolve.php method=post>";
                echo "<h4>View Mail Server Certificate (BETA)</h4>";
                echo "Enter IP or Hostname";
                echo "<br>";
                echo "<input type=text name=mailcert>";
                echo "<input type=hidden name=tool_option value=mailcert>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
	echo "</td>";
	echo "<td align=left>";
                echo "<form action=net_resolve.php method=post>";
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
	echo "<form action=net_resolve.php method=post>";
                echo "<h4>View Web Server Certificate (BETA)</h4>";
                echo "Enter IP or Hostname";
                echo "<br>";
                echo "<input type=text name=webcert>";
                echo "<input type=hidden name=tool_option value=webcert>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
	echo "</td>";
	echo "<td align=left>";
		echo "<form action=net_resolve.php method=post>";
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
	echo "<form action=net_resolve.php method=post>";
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
               echo "<form action=net_resolve.php method=post>";
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
		echo "<form action=net_resolve.php method=post>";
                echo "<h4>Malware Detection Tool </h4>";
                echo "Enter MD5 hash of file";
                echo "<br>";
                echo "<input type=text name=hash>";
                echo "<input type=hidden name=tool_option value=malware>";
                echo "<input type=submit value=malware>";
		echo "<br>";
		echo "download md5 <a href=http://www.pc-tools.net/win32/md5sums target=_window onClick=javascript: pageTracker._trackPageview('/var/www/html/fixyourip/outgoing/pctools');>program</a>";
                echo "<br><br>";
                echo "</form>";
	echo "</td>";
	echo "<td align=left>";
                echo "<form action=net_resolve.php method=post>";
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
        echo "<td align=left>";
		echo "<form action=net_resolve.php method=post>";
                echo "<h4>Check Domain for SPF record</h4>";
                echo "Enter FQDN (Domain)";
                echo "<br>";
                echo "<input type=text name=ip>";
                echo "<input type=hidden name=tool_option value=spf>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
        echo "</td>";
        echo "<td align=left>";
                echo "<form action=net_resolve.php method=post>";
                echo "<h4>Reverse IP Address Lookup </h4>";
                echo "Check if your IP has a reverse DNS entry";
                echo "<br>";
                echo "<input type=text name=ip>";
                echo "<input type=hidden name=tool_option value=reverseip>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
        echo "</td>";
echo "</tr>";

echo "<tr>";
        echo "<td align=left>";
	echo "<form action=net_resolve.php method=post>";
                echo "<h4>Check Certificate Validity </h4>";
                echo "Enter FQDN of server";
                echo "<br>";
                echo "<input type=text name=ip>";
                echo "<input type=hidden name=tool_option value=ssl>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
        echo "</td>";
        echo "<td align=left>";
                echo "<form action=net_resolve.php method=post>";
                echo "<h4>TraceRoute </h4>";
                echo "Trace packets from this host";
                echo "<br>";
                echo "<input type=text name=ip>";
                echo "<input type=hidden name=tool_option value=trace>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
        echo "</td>";
echo "</tr>";

echo "<tr>";
        echo "<td align=left>";
                echo "<form action=net_resolve.php method=post>";
                echo "<h4>Who hosts that Website (BETA)</h4>";
                echo "Enter web site address";
                echo "<br>";
                echo "<input type=text name=ip value=>";
                echo "<input type=hidden name=tool_option value=webhost>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
        echo "</td>";

	echo "<td align=left>";
                echo "<form action=net_resolve.php method=post>";
                echo "<h4>Check DNS propogation.</h4>";
                echo "Enter FQDN of server";
                echo "<br>";
                echo "<input type=text name=ip value=>";
                echo "<input type=hidden name=tool_option value=dnspropogate>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
                echo "</form>";
        echo "</td>";
echo "</tr>";
echo "<tr>";
        echo "<td align=left>";
                echo "<form action=/net_resolve.php method=post>";
                echo "<h4>DNS Zonecheck </h4>";
                echo "Enter Domain Name (google.com)";
                echo "<br>";
                echo "<input type=text name=zone>";
                echo "<input type=hidden name=tool_option value=zone>";
                echo "<input type=submit value=check>";
                echo "<br><br>";
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

include 'includes/adds/google_add.inc';
echo "</center>";
include 'includes/footer.inc';
?>
