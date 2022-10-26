<?
include("../baglanti.php");

$sql=" insert into kullanici values('','".$_POST['kad']."','".$_POST['ksifre']."',".
	" '".date("y-m-d")."','".$_POST['kdurum']."') ";

mysql_query($sql) or die (mysql_error());
header('location:admin.php?s=kullanici');

?>

