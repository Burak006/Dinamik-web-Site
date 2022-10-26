<?

$sql="select * from sayfalar where s_id='".$_GET['sid']."'";
$sql_cls=mysql_query($sql)or die(mysql_error());
while($kayit=mysql_fetch_assoc($sql_cls))
{
	 $icbaslik=$kayit['s_ic_baslik'];
	
	 $icerik=$kayit['s_icerik'];
}
?>

<link href="css/sayfalar.css" type="text/css" rel="stylesheet"/>

<div class="govde">
		
<a href="index.php"><div class="menu_baslik">Eğitim ve Yayın Dairesi Başkanlığı > Menu</div></a>
	
<div class="hizalama_bitir"></div>
		
		<div class="baslik"><? echo $icbaslik; ?></div>

<div class="hizalama_bitir"></div>
		
		<div class="icerik"><? echo $icerik;?></div>
	
<div class="hizalama_bitir"></div>		
</div>















