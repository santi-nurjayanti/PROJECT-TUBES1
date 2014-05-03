<?php
$xml = simplexml_load_file("http://rss.vivanews.com/get/bola");
$items = $xml->xpath("/rss/channel/item");
foreach($items as $item){
   echo $item ->pubDate.'<br>'; 
   echo  $item->title.'';
   echo $item->description.'';
}
?>
