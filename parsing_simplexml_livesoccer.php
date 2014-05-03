<?php
    $xml = simplexml_load_file("http://www.scorespro.com/rss2/live-soccer.xml");
	echo '<pre>'; print_r($xml);
?>
