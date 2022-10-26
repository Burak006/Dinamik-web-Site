<?
include("../baglanti.php");

$sql=" update sayfalar set s_baslik='".$_POST['baslik']."' , s_ic_baslik='".$_POST['icbaslik']."', ".
	" s_icerik='".$_POST['icerik']."' where s_id='".$_GET['g_id']."' ";


mysql_query($sql);

header('location:admin.php?s=sayfalar');

?>