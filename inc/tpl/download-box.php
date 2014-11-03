<?php
	$download = $this->getDownload('firefox');
	switch($type):
		case 'page':
?>

<p><strong>Firefox <?php echo $download->getVersion()?></strong> je oficiálně dostupný pro Windows 2000 a vyšší, Linux a Mac OS X. Bližší informace jsou dostupné na stránce <a href="http://www.mozilla-europe.org/cs/firefox/system-requirements/">systémové požadavky</a>.</p>
<div>
	<ul>
		<li class="download-ico-win"><a href="<?php echo $download->getDownloadLink('win')?>" onclick="_gaq.push(['_trackEvent', 'Download', 'Firefox', '<?php echo $download->getTrackingLabel('win')?>']);">Stáhnout český Firefox <?php echo $download->getVersion()?> pro Windows</a></li>
		<li class="download-ico-linux"><a href="<?php echo $download->getDownloadLink('lin')?>" onclick="_gaq.push(['_trackEvent', 'Download', 'Firefox', '<?php echo $download->getTrackingLabel('lin')?>']);">Stáhnout český Firefox <?php echo $download->getVersion()?> pro Linux</a></li>
		<li class="download-ico-mac"><a href="<?php echo $download->getDownloadLink('mac')?>" onclick="_gaq.push(['_trackEvent', 'Download', 'Firefox', '<?php echo $download->getTrackingLabel('mac')?>']);">Stáhnout český Firefox <?php echo $download->getVersion()?> pro Mac OS X</a></li>
	</ul>
</div>

<p>Bližší informace o aktuální verzi naleznete v <a href="<?php echo $download->getChangelogLink()?>">poznámkách k vydání</a>.</p>
<ul>
	<li><strong>Starší verzi </strong> si můžete <a href="http://www.mozilla.org/en-US/firefox/all-older.html" hreflang="en" onclick="_gaq.push(['_trackEvent', 'Link', 'Firefox', this.href]);">stáhnout z webu Mozilla.org</a>.</li>
	<li>Pokud máte zájem o anglickou či jinou jazykovou verzi, můžete si ji taktéž <a href="http://www.mozilla.org/en-US/firefox/all.html" hreflang="en" onclick="_gaq.push(['_trackEvent', 'Link', 'Firefox', this.href]);">stáhnout z webu Mozilla.org</a>.</li>
</ul>

<h2 class="separator">Samostatný jazykový balíček</h2>
<p>Pro případ, kdy potřebujete počeštit anglickou verzi Firefoxu, si můžete stáhnout samostatný lokalizační balíček. Pro snadné přepínání lokalizací si nainstalujte rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/356">Locale Switcher</a>.</p>
<div>
<ul>
	<li class="download-ico-addon"><a href="<?php echo $download->getDownloadLink('port')?>" onclick="_gaq.push(['_trackEvent', 'Download', 'Firefox', '<?php echo $download->getTrackingLabel('port')?>']);">Stáhnout lokalizační balíček pro Firefox <?php echo $download->getVersion()?></a></li>
</ul>
</div>

<?php
		break;

		case 'sidebar':
		default:
?>

<div class="side-dl"><div class="side-dl-in">
	<a href="<?php echo $download->getDownloadLink()?>" onclick="_gaq.push(['_trackEvent', 'Download', 'Firefox', '<?php echo $download->getTrackingLabel()?>']);" class="side-dl-link">Stáhnout!</a>
	<span>Mozilla Firefox <?php echo $download->getVersion()?> pro <?php echo $download->getPlatformName()?>, česká verze</span>
	<a href="/stahnout/" class="side-dl-oth">Další platformy&nbsp;...</a>
</div></div>

<?php
		break;
	endswitch;
?>
