<?php
	$redirects = array(
		'/jak-prejit' => 'https://support.mozilla.org/cs/kb/Import%20z%C3%A1lo%C5%BEek%20a%20dal%C5%A1%C3%ADch%20dat%20z%20jin%C3%BDch%20prohl%C3%AD%C5%BEe%C4%8D%C5%AF',
		'/media' => 'https://www.mozilla.org/cs/firefox/desktop/',
		'/otazky' => 'https://support.mozilla.org/cs/products/firefox',
		'/otazky/klavesove-zkratky' => 'https://support.mozilla.org/cs/kb/Kl%C3%A1vesov%C3%A9%20zkratky',
		'/otazky/ovladani-mysi' => 'https://support.mozilla.org/cs/kb/Ovl%C3%A1d%C3%A1n%C3%AD%20Firefoxu%20my%C5%A1%C3%AD',
		'/otazky/rozdily-terminologie' => 'https://support.mozilla.org/cs/kb/Pro%20u%C5%BEivatele%20Internet%20Exploreru#w_rozdagly-v-terminologii',
		'/proc-prejit' => 'https://www.mozilla.org/cs/firefox/desktop/',
		'/proc-prejit/co-msie-neumi-a-firefox-ano' => 'https://www.mozilla.org/cs/firefox/desktop/',
		'/propagace' => 'https://affiliates.mozilla.org/',
		'/stahnout/tapety' => 'https://addons.mozilla.org/cs/firefox/themes/',
		'/stahnout' => 'http://www.mozilla.cz/stahnout/firefox/',
	);

	$requestUri = filter_input(INPUT_SERVER, 'REQUEST_URI');
	$requestUri = str_replace('index.php', '', $requestUri);
	if($requestUri !== '/') {
		$requestUri = rtrim($requestUri, '/');
	}
	if(isset($redirects[$requestUri])) {
		header('HTTP/1.1 301 Moved Permanently');
		header(sprintf('Location: %s', $redirects[$requestUri]));
		header('Connection: close');
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
