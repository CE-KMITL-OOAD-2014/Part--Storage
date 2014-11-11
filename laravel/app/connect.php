<?php

$conn = mysql_connect("localhost","root","123456") or die("can't connect".mysql_error());
$select_db = mysql_select_db("partstorage", $conn) or die("can't select".mysql_error());

mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");
?>