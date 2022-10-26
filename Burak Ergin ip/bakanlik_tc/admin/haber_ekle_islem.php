<?
session_start();
include("guvenlik.php");

include("../baglanti.php");

 $sql=" insert into haberler values('','".$_POST['baslik']."','".$_POST['icerik']."', ".
	" '".date("y-m-d")."') ";


mysql_query($sql)or die(mysql_error());

header('location:admin.php?s=haberler');

?>