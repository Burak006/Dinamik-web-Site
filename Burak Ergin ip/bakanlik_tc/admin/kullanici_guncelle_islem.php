<?
include("../baglanti.php");

$sql=" update kullanici set k_adi='".$_POST['kad']."',k_sifre='".$_POST['ksifre']."',".
	" k_durum='".$_POST['kdurum']."' where k_id='".$_GET['g_id']."' ";

mysql_query($sql) or die (mysql_error());

header('location:admin.php?s=kullanici');

?>


