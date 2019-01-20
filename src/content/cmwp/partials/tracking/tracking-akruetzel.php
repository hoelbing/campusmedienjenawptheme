<?php
    /**
     * Code from Piwik
     * (Hardcode)
     */
        ?>

	<!-- Piwik -->
	<script type="text/javascript">
		var _paq = _paq || [];
		_paq.push(["setDoNotTrack", true]);
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function () {
			var u = "//stats.stura.uni-jena.de/";
			_paq.push(['setTrackerUrl', u + 'piwik.php']);
			_paq.push(['setSiteId', 13]);
			var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
			g.type = 'text/javascript';
			g.async = true;
			g.defer = true;
			g.src = u + 'piwik.js';
			s.parentNode.insertBefore(g, s);
		})();
	</script>
	<noscript>
		<p>
			<img src="https://stats.stura.uni-jena.de/piwik.php?idsite=13" style="border:0;" alt="piwik" title="piwik" />
		</p>
	</noscript>
	<!-- End Piwik Code -->
