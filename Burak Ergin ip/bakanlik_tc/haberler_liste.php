<!--Body başlangıç-->
<link href="css/haberler_liste.css" type="text/css" rel="stylesheet"/>	

<div class="hizalama_bitir"></div>	

<!--slider başlangıç-->	
	<div class="slider_haber">
		
		<div class="slider_haber_resim">
			<img src="images/toplanti.png" width="1200px" height="500px">
		</div>
		
		<div class="slider_haber_yazi">
			"İKİLER GÜNÜ"NDE  KOOPERTİFLER İÇİN ULUSLARARASI İŞ <br> BİRLİĞİ 
		</div>
		
		<div class="kutu_resim">
			<div class="haber_resim1">
				<img src="images/Konya_tarim_fuari.png" width="80px" height="45px">
			</div>
			
			<div class="haber_resim2">
				<img src="images/toplanti.png" width="80px" height="45px">
			</div>
			
			<div class="haber_resim3">
				<img src="images/Bakan_Pakdemir.png" width="80px" height="45px">
			</div>
			
			<div class="haber_resim4">
				<img src="images/eski_bakan.jpg" width="80px" height="45px">
			</div>
			
			<div class="haber_resim5">
				<img src="images/konferans.jpg" width="80px" height="45px">
			</div>
		</div>
		
		<div class="arsiv">Arşiv</div>
		
	</div>
	
<!--slider bitiş-->	
	
<div class="hizalama_bitir"></div>
	
<!--duyurular başlangıç-->
	<div class="duyurular_ana">
		<div class="baglantilar_ana_div">
		   <div class="baglanti_yazi">BAGLANTILAR</div>
			
<div class="hizalama_bitir"></div>	
			
			<div class="baglanti_slider">
			  <div class="slider_govde">
				<div class="temmuz"><img src="images/15Temmuz.png" width="60px" height="66px"></div>
<div class="hizalama_bitir"></div>
					<div class="slider_yazi">15 Temmuz Destanı</div>
			  </div>
			</div>
	
		</div>
	
		<div class="duyuru_ihale">
			<div class="duyuru_ihale_baslik">
				<a href="index.php"><div class="duyurlar">Duyurular</div></a>
				<a href="index.php"><div class="haberler">Haberler</div></a>
				<div class="tumu" >Tümü</div>
			</div>

<div class="hizalama_bitir"></div>
		<?
        	$sql=" select * from haberler order by h_tarih desc";
			$duyuru=mysql_query($sql);
			while($gel=mysql_fetch_assoc($duyuru))
			{
		?>		
			<div class="duyurular_ic">
		
			<a href="index.php?s=haberler&hid=<? echo $gel['h_id'];?>"><div class="tarihler"><? echo substr($gel['h_tarih'],2,2),".";?>
		<? echo substr($gel['h_tarih'],5,2),".";?>
		<? echo substr($gel['h_tarih'],0,4);?></div></a>
				
			<a href="index.php?s=haberler&hid=<? echo $gel['h_id'];?>"><div class="metin"><? echo $gel['h_baslik'];?></div></a>
				
			<div class="hizalama_bitir"></div>
				
			<div class="asagi_ok"><img src="images/asagi_ok.png" width="8px" height="4px"></div>	
			
			</div>
		<?
			}
		?>	
	<div class="hizalama_bitir"></div>
		</div>
	
	</div>
<!--duyurular bitiş-->	
	
<div class="hizalama_bitir"></div>
	
<!--kısayollar başlangıç-->	
	<div class="kisayollar_ana_div">
		<div class="kutu_1">
			<div class="kutu_1_resim"><img src="images/kamera_icon.png" width="55px" height="36px"></div>
			<div class="kutu_1_yazi">Web Tarım TV</div>
		</div>
		
		<div class="kutu_2">
			<div class="kutu_1_resim"><img src="images/kalem_icon.png" width="50px" height="48px"></div>
			<div class="kutu_1_yazi">Tarım Orman Akademisi</div>
		</div>
		
		<div class="kutu_3">
			<div class="kutu_1_resim"><img src="images/kitap_icon.png" width="43px" height="48px"></div>
			<div class="kutu_1_yazi">Türk Tarım Orman Dergisi</div>
		</div>
<div class="hizalama_bitir"></div>		
		<div class="kutu_1">
			<div class="kutu_1_resim"><img src="images/kitap_icon.png" width="43px" height="48px"></div>
			<div class="kutu_1_yazi">Tarım Orman Bülteni</div>
		</div>
		
		<div class="kutu_2">
			<div class="kutu_1_resim"><img src="images/kitap_icon.png" width="43px" height="48px"></div>
			<div class="kutu_1_yazi">e-Kütüphane</div>
		</div>
		
		<div class="kutu_3">
			<div class="kutu_1_resim"><img src="images/yukariok_icon.png" width="43px" height="42px"></div>
			<div class="kutu_1_yazi">El Sanatları ve Hizmet İç...</div>
		</div>
<div class="hizalama_bitir"></div>		
		<div class="kutu_1">
			<div class="kutu_1_resim"><img src="images/a_z_icon.png" width="41px" height="42px"></div>
			<div class="kutu_1_yazi">Cok Dilli Tarım Orman Söz<br>...</div>
		</div>
		
		<div class="kutu_2">
			<div class="kutu_1_resim"><img src="images/kep_icon.png" width="62px" height="36px"></div>
			<div class="kutu_1_yazi">Uzaktan Yabancı Dil Eğiti...</div>
		</div>
		
		<div class="kutu_3">
			<div class="kutu_1_resim"><img src="images/klasor_icon.png" width="49px" height="36px"></div>
			<div class="kutu_1_yazi">2020 Yılı İl Yayım Progra...</div>
		</div>		
<div class="hizalama_bitir"></div>		
		<div class="kutu_1">
			<div class="kutu_1_resim"><img src="images/canta_icon.png" width="49px" height="42px"></div>
			<div class="kutu_1_yazi">Tarımsal Yenilik ve Bilgi...</div>
		</div>
		
		<div class="kutu_2">
			<div class="kutu_1_resim"><img src="images/dosya1_icon.png" width="37px" height="48px"></div>
			<div class="kutu_1_yazi">Kırsalda Kadın ve Aile Hi...</div>
		</div>
		
		<div class="kutu_3">
			<div class="kutu_1_resim"><img src="images/dosya2_icon.png" width="37px" height="48px"></div>
			<div class="kutu_1_yazi">TYDD Tebliğ Faaliyet Form<br>...</div>
		</div>

	</div>
<!--kısayollar bitiş-->	
		
<div class="hizalama_bitir"></div>	
	
<!--çiftciye destek başlanfıç-->
	<div class="ciftci_destek_ana">
		<div class="ciftciye_destek_govde">
			
			<div class="destek_kutu_1">
			<div class="destek_icon_1"></div>
<div class="hizalama_bitir"></div>
			<div class="sayi">3400</div>
<div class="hizalama_bitir"></div>			
			 <div class="cizgi"></div>
<div class="hizalama_bitir"></div>
			<div class="destek_yazi">Desteklenen Genç Çiftci</div>
			</div>
			
			<div class="destek_kutu_1">
			<div class="destek_icon_2"></div>
<div class="hizalama_bitir"></div>
			<div class="sayi">45</div>
<div class="hizalama_bitir"></div>			
			 <div class="cizgi"></div>
<div class="hizalama_bitir"></div>
			<div class="destek_yazi">Milli Park</div>
			</div>
			
			<div class="destek_kutu_1">
			<div class="destek_icon_3"></div>
<div class="hizalama_bitir"></div>
			<div class="sayi">3</div>
<div class="hizalama_bitir"></div>			
			 <div class="cizgi"></div>
<div class="hizalama_bitir"></div>
			<div class="destek_yazi">Milyar ₺ Hayvancılık Destekleri</div>
			</div>
			
			<div class="destek_kutu_1">
			<div class="destek_icon_4"></div>
<div class="hizalama_bitir"></div>
			<div class="sayi">12</div>
<div class="hizalama_bitir"></div>			
			 <div class="cizgi"></div>
<div class="hizalama_bitir"></div>
			<div class="destek_yazi">Milyar ₺ Tarımsal Destekler</div>
			</div>
			
			<div class="destek_kutu_1">
			<div class="destek_icon_5"></div>
<div class="hizalama_bitir"></div>
			<div class="sayi">4</div>
<div class="hizalama_bitir"></div>			
			 <div class="cizgi"></div>
<div class="hizalama_bitir"></div>
			<div class="destek_yazi">Milyar Fidan Dikimi</div>
			</div>

		</div>
		
	</div>
<!--çiftciye destek bitiş-->
	
<div class="hizalama_bitir"></div>
	
<!--kamu spotu başlangıç-->
<div class="kamupsotu_ana">
		<div class="kamupsotu_baslik">KAMU SPOTLARI</div>
		<div class="kamupsotu_tumu">TÜMÜ</div>
		
<div class="hizalama_bitir"></div>
		
	<div class="kamupsotu_videolar">
		
			<div class="kamupsotu_video_1">
				<div class="video_1">
					<div class="oynatici">
						<div class="play_icon1"></div>
					</div>
				</div>
				<div class="video_1_yazi">Tarım ve Kırsal Kalkınma Sektörü Tanıtım<br>Videosu</div>
			</div>
			
			<div class="kamupsotu_video_2">
				<div class="video_2">
					<div class="oynatici">
						<div class="play_icon2"></div>
					</div>
				</div>
				<div class="video_2_yazi">Nitrat Kirliliği</div>
			</div>
	</div>

</div>	
<!--kamu spotu bitiş-->	

<div class="hizalama_bitir"></div>
	

<!--Body bitiş-->