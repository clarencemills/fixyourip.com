</center>
<center>
<?php
include 'includes/site_info.inc';
?>
<font size=2>Copyright &copy; 2008 - 2013 <a href="http://www.fixyourip.com">www.fixyourip.com</a>.</font>
</center>

<!--  Pwik traching Code -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.opensitesolutions.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 2]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//analytics.opensitesolutions.com/piwik/piwik.php?idsite=2" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<!--  Piwik gather keyword search's -->
<?php

// This function will call the API to get best keyword for current URL.
// Then it writes the list of best keywords in a HTML list
function DisplayTopKeywords($url = "")
{
	// Do not spend more than 1 second fetching the data
	@ini_set("default_socket_timeout", $timeout = 1);
	// Get the Keywords data
	$url = empty($url) ? "http://". $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] : $url;
	$api = "http://analytics.opensitesolutions.com/piwik/?module=API&method=Referrers.getKeywordsForPageUrl&format=json&filter_limit=10&token_auth=ec04b7884538cad79bb4d8c7dfedfd79&date=previous1&period=week&idSite=2&url=" . urlencode($url);
	$keywords = @json_decode(file_get_contents($api), $assoc = true);
	Common::sendHeader('Content-Type: text/html; charset=utf-8', true);
	if ($keywords === false || isset($keywords["result"])) {
		// DEBUG ONLY: uncomment for troubleshooting an empty output (the URL output reveals the token_auth)
		// echo "Error while fetching the <a href='$api'>Top Keywords from Piwik</a>";
		return;
	}

	// Display the list in HTML
	$url = htmlspecialchars($url, ENT_QUOTES);
	$output = "<h2>Top Keywords for <a href='$url'>$url</a></h2><ul>";
	foreach($keywords as $keyword) {
		$output .= "<li>". $keyword . "</li>";
	}
	if (empty($keywords)) { $output .= "Nothing yet..."; }
	$output .= "</ul>";
	echo $output;
}

 DisplayTopKeywords();
 ?>
 <!--  End Collect Search words -->

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-744038-6', 'auto');
  ga('send', 'pageview');

</script>

<!-- End Google Analytics -->


</body>
</html>
