<?php
$con=mysql_connect(localhost,"root","");
$q=mysql_select_db("costumer",$con);
$sql="select * from 'expenditure' limit 0,30 ";
echo $sql;
?>