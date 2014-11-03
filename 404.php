<?php
	$badUrl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	$redirectUrl = '';
	
	if (strpos($_SERVER['REQUEST_URI'], "/otazky/klavesove-zkratky") === 0) {
		$redirectUrl = "http://support.mozilla.com/cs/kb/Kl%C3%A1vesov%C3%A9+zkratky";
	}	
	if (strpos($_SERVER['REQUEST_URI'], "/otazky/ovladani-mysi") === 0) {
		$redirectUrl = "http://support.mozilla.com/cs/kb/Ovl%C3%A1d%C3%A1n%C3%AD+Firefoxu+my%C5%A1%C3%AD";
	}
	if (strpos($_SERVER['REQUEST_URI'], "/otazky/rozdily-terminologie") === 0) {
		$redirectUrl = "http://support.mozilla.com/cs/kb/Pro%20u%C5%BEivatele%20Internet%20Exploreru#Rozd_ly_v_terminologii";
	}
	if (strpos($_SERVER['REQUEST_URI'], "/proc-prejit") === 0) {
		$redirectUrl = "http://www.mozilla.org/cs/firefox/features/";
	}
	if (strpos($_SERVER['REQUEST_URI'], "/propagace") === 0) {
		$redirectUrl = "https://affiliates.mozilla.org/cs/";
	}
	if (strpos($_SERVER['REQUEST_URI'], "/proc-prejit/co-msie-neumi-a-firefox-ano") === 0) {
		$redirectUrl = "http://www.mozilla.org/cs/firefox/features/";
	}

	if ($redirectUrl != '') {
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: " . $redirectUrl);
		header("Connection: close");
		exit;
	}

	require_once './inc/page.php';
	$page->setTitle('Dokument nenalezen / Document not found');
	$page->includeTemplate('header');
?>
<script type="text/javascript">
		_gaq.push(['_trackEvent', 'Error', '404', location.href]);
</script>
<div class="main">

	<h1>Dokument nenalezen (404)</h1>

	<p>Tento dokument nebyl na serveru <a href="/"><?php echo $page->getWebName()?></a>
	nalezen. Zkontrolujte prosím, zda je jeho adresa zadaná správně.</p>
	<p>Domovská stránka serveru <a href="/"><?php echo $page->getWebName()?></a>.</p>

	<hr />

	<p lang="en">This document was not found on <a href="/" hreflang="cs">Switch To Firefox</a>
	website. Please check if its location has been typed correctly.</p>
	<p lang="en">Homepage of <a href="/" hreflang="cs">Switch To Firefox</a> site.</p>
</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující informace</h2>
	<h3 class="first">Doporučené servery</h3>
	<ul>
		<li><a href="http://www.mozilla.cz/">Mozilla.cz</a></li>
		<li><a href="http://www.mozilla.org/" hreflang="en" class="l-en" lang="en" onclick="_gaq.push(['_trackEvent', 'Link', 'Mozilla', this.href]);">Mozilla.org</a></li>
		<li><a href="http://www.mozillazine.org/" hreflang="en" class="l-en" lang="en" onclick="_gaq.push(['_trackEvent', 'Link', 'Mozilla', this.href]);">MozillaZine</a></li>
		<li><a href="http://planet.mozilla.org/" hreflang="en" class="l-en" lang="en" onclick="_gaq.push(['_trackEvent', 'Link', 'Mozilla', this.href]);">Planet Mozilla</a></li>
	</ul>
</div></div>
<div class="path">
	<hr />
	<p><a href="/"><?php echo $page->getWebName()?></a> &gt; <strong>Dokument nenalezen</strong></p>
</div>
<?php
	$page->includeTemplate('footer');
?>
