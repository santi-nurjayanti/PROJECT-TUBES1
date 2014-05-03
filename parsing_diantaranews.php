<html>
<head>
<body>
<h1>"DIANTARANEWS.COM"</h1>
<?php
$xml = simplexml_load_file("xml/news.xml")
       or die("Error: Cannot create object");
	  
foreach($xml->children() as $item){
  foreach($item->children() as $item => $data){
     
	 echo $data['title']. '<br/>';
     echo $data->pubDate . '<br/>';
     echo $data->description . '<br/>';
  }
}      
?>
</body>
</head>
</html>
