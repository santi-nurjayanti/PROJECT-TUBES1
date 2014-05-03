<html>
 <head>
 </head>
<body>
<h1>VIVANEWS BOLA</h1>
<?php
$html = "";
$url = "http://rss.vivanews.com/get/bola";
$xml = simplexml_load_file($url);
 
for($i = 0; $i < 20; $i++){
 
    $title = $xml->channel->item[$i]->title;
    $link = $xml->channel->item[$i]->link;
    $description = $xml->channel->item[$i]->description;
    $pubDate = $xml->channel->item[$i]->pubDate;
 
    $html .= "<a href='$link'><h3>$title</h3></a>";
    $html .= "$description";
    $html .= "<br />$pubDate<hr />";
}
echo $html;
?>
</p>
</body>
</html>
