<?
include("../baglanti.php");

$sql=" update haberler set h_baslik='".$_POST['baslik']."' , h_icerik='".$_POST['icerik']."' ".
	"  where h_id='".$_GET['g_id']."' ";

mysql_query($sql);

header('location:admin.php?s=haberler');

?>
