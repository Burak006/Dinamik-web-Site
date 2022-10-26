<?

//echo $_GET['sil_id'];

include("../baglanti.php");

$sql=" delete from haberler where h_id='".$_GET['sil_id']."' ";

mysql_query($sql);

header('location:admin.php?s=haberler');
?>