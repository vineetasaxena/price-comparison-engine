<?php $sqllogin="hifibrands";
$db = mysql_connect("$sqlhost", "$sqllogin", "$sqlpass") or die("MySQL Connection Failed");
mysql_select_db("$sqldb", $db);
?>