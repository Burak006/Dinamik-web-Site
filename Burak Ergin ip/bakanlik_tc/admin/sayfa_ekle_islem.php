<?
session_start();
include("guvenlik.php");

include("../baglanti.php");

$sql=" insert into sayfalar values('','".$_POST['baslik']."', ".
	" '".$_POST['icbaslik']."','".$_POST['icerik']."')";
   

mysql_query($sql)or die(mysql_error());

header('location:admin.php?s=sayfalar');

?>