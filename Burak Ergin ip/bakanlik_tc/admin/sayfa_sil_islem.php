<?

//echo $_GET['sil_id'];

include("../baglanti.php");

$sql=" delete from sayfalar where s_id='".$_GET['sil_id']."' ";

mysql_query($sql);

header('location:admin.php?s=sayfalar');
?>