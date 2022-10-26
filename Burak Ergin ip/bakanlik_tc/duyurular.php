<?

$sql="select * from duyurular where d_id='".$_GET['did']."'";
$sql_cls=mysql_query($sql)or die(mysql_error());
while($kayit=mysql_fetch_assoc($sql_cls))
{
	 $baslik=$kayit['d_baslik'];
	
	 $tarih=$kayit['d_tarih'];
	
	
	 $icerik=$kayit['d_icerik'];
}
?>

<link href="css/haberler.css" type="text/css" rel="stylesheet"/>	

<div class="haberler_genel_div">
	
	<div class="sayfa_baslik"><a href="index.php">Eğitim ve Yayın Dairesi Başkanlığı</a> > Duyuru</div>
	
<div class="hizalama_bitir"></div>
	
	<!--sol menu başlangıç-->
	<div class="sol_menu">
	
		<div class="menu_baslik">EK DOSYALAR
		<h3 class="alt_cizgi"></h3>
		</div>
		
<div class="hizalama_bitir"></div>		
		
	<div class="alti_cizili_yazi"><img src="images/pdf_icon.png">guncel-uzmanlik-belgesi-<br>verilmesi-icin-yapilacak-<br>islemler 191 KB</div>
		
<div class="hizalama_bitir"></div>	
		
		<div class="alti_cizili_yazi"><img src="images/pdf_icon.png">uzmanlik-belgesi-verilmesi-<br>dilekce-ornegi2 179 KB</div>
		
<div class="hizalama_bitir"></div>	
			
		
	</div>
	<!--sol menu bitiş-->
	
	<!--sağ icerik başlangıç-->
	<div class="sag_icerik">
		
		<div class="icerik_baslik"><? echo $baslik; ?></div>
		
		
<div class="hizalama_bitir"></div>
		
		<div class="icerik_bilgi"><div class="tarih"><img src="images/takvim.png" width="11px" height="13px">
		<? echo substr($tarih,2,2),".";?>
		<? echo substr($tarih,5,2),".";?>
		<? echo substr($tarih,0,4);?></div> / GÖSTERİM SAYSI : 4031 / 
			<span class="span">ARŞİV</span></div>
		
<div class="hizalama_bitir"></div>	
	
		<div class="icerik_metin"><? echo $icerik; ?></div>
		

	</div>
	
	<!--sağ icerik bitiş-->

<div class="hizalama_bitir"></div>


</div>

























