<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> View Details</title>
</head>

<body><?php


$s=$_POST["Date"];
$a=$_POST["Food"];
$b=$_POST["Transport"];
$c=$_POST["Rest"];
$d=$_POST["Entmnt"];
$e=$_POST["Other"];
$f=($a+$b+$c+$d+$e);
echo "Expanditure of the date".$s;

echo " is </br>" .$f;


?>
</body>
</html>
