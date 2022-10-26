<?

$sql="select * from haberler where h_id='".$_GET['hid']."'";
$sql_cls=mysql_query($sql)or die(mysql_error());
while($kayit=mysql_fetch_assoc($sql_cls))
{
	 $baslik=$kayit['h_baslik'];
	 
	 $tarih=$kayit['h_tarih'];
	 
	 $icerik=$kayit['h_icerik'];
}
?>

<link href="css/haberler.css" type="text/css" rel="stylesheet"/>	

<div class="haberler_genel_div">
	
<a href="index.php?s=haberler_liste">
	<div class="sayfa_baslik">Eğitim ve Yayın Dairesi Başkanlığı > Haber</div></a>
	
<div class="hizalama_bitir"></div>
	
	<!--sol menu başlangıç-->
	<div class="sol_menu">
	
		<div class="menu_baslik">FOTOĞRAF GALERİSİ (5)
		<h3 class="alt_cizgi"></h3>
		</div>
		
<div class="hizalama_bitir"></div>	
	
		<div class="kucuk_resim"><img src="images/kucuk_resim1.jpg" width="95px" height="70px"></div>
		<div class="kucuk_resim"><img src="images/kucuk_resim2.jpg" width="95px" height="70px"></div>
<div class="hizalama_bitir"></div>		
		<div class="kucuk_resim"><img src="images/kucuk_resim3.jpeg" width="95px" height="70px"></div>
		<div class="kucuk_resim"><img src="images/kucuk_resim4.jpeg" width="95px" height="70px"></div>
		
<div class="hizalama_bitir"></div>	
		
	<div class="alti_cizili_yazi">Tüm fotoğrafları görüntülemek<br>için buraya tıklayınız.</div>
		
<div class="hizalama_bitir"></div>		
		
		<div class="menu_baslik">SON HABERLER
		<h3 class="alt_cizgi"></h3>
		</div>
		
<div class="hizalama_bitir"></div>	
	
		<div class="buyuk_resim"><img src="images/toplanti.png" width="200px" height="96px"></div>
		
<div class="hizalama_bitir"></div>	
		
	<div class="alti_cizili_yazi">“İkiler Günü”Nde Koopertifler<br>İçin Uluslarar ...</div>
		
<div class="hizalama_bitir"></div>
		
		<div class="buyuk_resim"><img src="images/Bakan_Pakdemir.png" width="200px" height="96px"></div>
		
<div class="hizalama_bitir"></div>	
		
	<div class="alti_cizili_yazi">Bakan Pakdemirli’Den <br>Eğitim Ve Yayın Dairesi’N ...</div>
		
<div class="hizalama_bitir"></div>
		
		<div class="buyuk_resim"><img src="images/eski_bakan.jpg" width="200px" height="96px"></div>
		
<div class="hizalama_bitir"></div>	
		
	<div class="alti_cizili_yazi">Bakan Pakdemirli: "Türkiye, 48 <br>Milyar Dolarlık ...</div>
		
<div class="hizalama_bitir"></div>
		
		<div class="buyuk_resim"><img src="images/konferans.jpg" width="200px" height="96px"></div>
		
<div class="hizalama_bitir"></div>	
		
	<div class="alti_cizili_yazi">Kooperatifler Çoğalıyor,<br>Kadınlar Güçleniyor</div>
		
<div class="hizalama_bitir"></div>
		
		<div class="buyuk_resim"><img src="images/toplanti.png" width="200px" height="96px"></div>
		
<div class="hizalama_bitir"></div>	
		
	<div class="alti_cizili_yazi">Tarım Ve Orman Bakanlığı<br>Devlet Teşvikleri Tan ...</div>
		
<div class="hizalama_bitir"></div>
		
		<h3 class="alt_cizgi_uzun"></h3>
		
<div class="hizalama_bitir"></div>		
		
		<div class="haber_arsiv">Haber Arşiv</div>
		
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

























