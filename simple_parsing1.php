<?php
$xml = simplexml_load_file("http://www.antara.co.id/rss/news.xml")
       or die("Error: Cannot create object");
foreach($xml->children() as $item){
  foreach($item->children() as $item => $data){
     echo $data['title']. "<br/>";
     echo $data->pubDate . "<br/>";
     echo $data->description . "<br/>";
  }
}      
?>
