<?
include("baglanti.php");
if(isset($_GET['s']))
{
	$sayfa=$_GET['s'];
}
else
{
	$sayfa="orta";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<title>Eğitim ve Yayın Dairesi Başkanlığı</title>
<link rel="shortcut icon" href="images/gthbLogo.png">
<link href="css/ana.css" type="text/css" rel="stylesheet"/>	
</head>


<body>
<div>
<!--banner başlanğıç-->
	<div class="banner_ana">
		<a href="index.php"><div class="logo"><img src="images/gthbLogo.png" width="100px" height="100px"></div></a>
			<a href="index.php"><div class="logo_yazi">T.C. TARIM VE ORMAN BAKANLIĞI<br>
			EĞİTİM VE YAYIN DAİRESİ BAŞKANLIĞI</div></a>
		
		<div class="irtibat_no">
			<div class="tel_icon"><img src="images/telefon_icon.png" width="16px" height="15px">ALO 180</div>
			<div class="tel_icon"><img src="images/telefon_icon.png" width="16px" height="15px">ALO 174</div>
			<div class="tel_icon"><img src="images/telefon_icon.png" width="16px" height="15px">ALO 177</div>
			<div class="engelli_icon"><img src="images/engelli_icon.png" width="12px" height="15px">Görme Engelliler</div>
			<div class="dil_icon"><img src="images/dil_icon.png" width="14px" height="14px">TR</div>
		</div>
		
		<div class="bayrak"><img src="images/tarimataturk.png" width="161px" height="80px"></div>
	</div>
<!--banner bitiş-->
<div class="hizalama_bitir"></div>
	
	
<!--menü başlangıç-->
	<div class="menu_ana">
		<div class="menu_govde">
			<div>
			<a href="index.php"><div class="menu_basliklari">ANASAYFA</div></a>
			<?
				$sql="select * from sayfalar order by s_id asc ";
				$sql_cls=mysql_query($sql);
				while($veri=mysql_fetch_assoc($sql_cls))
				{
            ?>
            	<a href="index.php?s=sayfalar&sid=<? echo $veri['s_id'];?>">
				<div class="menu_basliklari"><? echo $veri['s_baslik'];?></div></a>
            <?
				}
            ?>
			</div>
			<div class="arama_icon"><img src="images/arama_icon.png" width="48px" height="30px"></div>
		</div>
	</div>
<!--menü bitiş-->	
<div class="hizalama_bitir"></div>		

	
	<!-- Body başlangıç-->
    <div style="height:auto; margin:auto;">
		<? 
			include($sayfa.".php");//orta.php
		?>
    </div>
    <!-- Body bitiş-->
	
<div class="hizalama_bitir"></div>	
	
	<!--bağlantılar başlangıç-->
	<div class="baglanti_baslik">BAGLANTILAR</div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="baglanti_bg">
		
		<div class="baglanti_govde">
			
			<div class="baglanti_linkleri1">
				<img src="images/15Temmuz.png" width="60px" height="66px">
			</div>
			<div class="baglanti_linkleri2">
				<img src="images/hayvancilik_calistayi.png" width="67px" height="66px">
			</div>
			<div class="baglanti_linkleri3">
				<img src="images/TarimsalZirve.png" width="56px" height="66px">
			</div>
			<div class="baglanti_linkleri4">
				<img src="images/cimer-logo.png" width="207px" height="66px">
			</div>
			<div class="baglanti_linkleri5">
				<img src="images/uluslararasi_bakliyat.jpg" width="97px" height="66px">
			</div>
			<div class="baglanti_linkleri6">
				<img src="images/etik_rehberi.png" width="66px" height="66px">
			</div>
			<div class="baglanti_linkleri7">
				<img src="images/GIDANI KORU.png" width="140px" height="66px">
			</div>
			
		</div>
		
	</div>
<!--bağlantılar bitiş-->
		
<div class="hizalama_bitir"></div>
	
	
<!--foother başlangıç-->
<div class="foother_ana_div">
	
	<div class="bakanlik_adresi">
		<div class="adres_baslik">İLETİŞİM</div>
		
<div class="hizalama_bitir"></div>	
		<div class="adres_metin">Eğitim ve Yayın Dairesi Başkanlığı</div>
		
<div class="hizalama_bitir"></div>	
		<div class="adres_metin"><img src="images/f_konum_icon.png" width="10px" height="13px">
			Adres : T.C. Tarım ve Orman Bakanlığı Eğitim ve Yayın Dairesi Başkanlığı Bankacılar Sokak No: 10 Yenimahalle/ANKARA</div>
		
<div class="hizalama_bitir"></div>	
		<div class="adres_metin"><img src="images/f_tel_icon.png" width="13px" height="13px">
			Telefon : 0312 315 65 55</div>
		
<div class="hizalama_bitir"></div>	
		<div class="adres_metin"><img src="images/f_faks_icon.png" width="13px" height="13px">
			Faks : 0312 344 81 40</div>
		
<div class="hizalama_bitir"></div>	
		<div class="adres_metin"><img src="images/f_eposta_icon.png" width="13px" height="9px">
			E-Posta : yayin@tarim.gov.tr</div>			
	</div>
	
	<div class="hizli_menu">
		<div class="hizli_menu_baslik">HIZLI MENU</div>
		
<div class="hizalama_bitir"></div>		
		<a href="http://localhost/phpmyadmin/"><div class="hizli_menu_metin"><img src="images/f_sagok_icon.png" width="6px" height="7px">
			Kullanıcı Girişi</div></a>
		<div class="hizli_menu_metin"><img src="images/f_sagok_icon.png" width="6px" height="7px">
			Bakanlık e-Posta</div>
		
<div class="hizalama_bitir"></div>		
		<div class="hizli_menu_metin"><img src="images/f_sagok_icon.png" width="6px" height="7px">
			 Biyogüvenlik</div>
		<div class="hizli_menu_metin"><img src="images/f_sagok_icon.png" width="6px" height="7px">
			 Arabuluculuk</div>
		
<div class="hizalama_bitir"></div>		
		<div class="hizli_menu_metin"><img src="images/f_sagok_icon.png" width="6px" height="7px">
			 e-Kütüphane</div>	
		
<div class="hizalama_bitir"></div>		
		<div class="hizli_menu_metin"><img src="images/f_sagok_icon.png" width="6px" height="7px">
			e-İmza Servisi</div>	
		
<div class="hizalama_bitir"></div>		
		<div class="hizli_menu_metin"><img src="images/f_sagok_icon.png" width="6px" height="7px">
			 İntranet</div>	
		
<div class="hizalama_bitir"></div>		
		<div class="hizli_menu_metin"><img src="images/f_sagok_icon.png" width="6px" height="7px">
			 Hizmet İçi Eğitim</div>		
	</div>
	
</div>	
<div class="hizalama_bitir"></div>
	
	<div class="alt_foother_ana">
		<div class="alt_foother_govde">
			© 2022 Tüm hakları saklıdır. TURKİYE CUMHURİYETİ TARIM VE ORMAN BAKANLIĞI
		</div>
	</div>
<!--foother bitiş-->	
	
</div>	
</body>
</html>