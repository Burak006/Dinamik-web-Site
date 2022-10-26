<?
session_start();

include("guvenlik.php");

include("../baglanti.php");

include("fckeditor/fckeditor.php");

if(isset($_GET['s']))
{
	$sayfa=$_GET['s'];
}
else
{
	$sayfa="orta";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Paneli</title>
	<link rel="shortcut icon" href="admin_images/gthbLogo.png">
	<link href="css/admin.css" type="text/css" rel="stylesheet"/>	
</head>

<body>
	<div>
		
	<div class="ana_govde">
		
	<!--banner başlanğıç-->
	<div class="banner_ana">
		<a href="admin.php"><div class="logo"><img src="admin_images/gthbLogo.png" width="100px" height="100px"></div></a>
			<a href="admin.php"><div class="logo_yazi">T.C. TARIM VE ORMAN BAKANLIĞI<br>
			EĞİTİM VE YAYIN DAİRESİ BAŞKANLIĞI</div></a>

			<div class="menuler">
				
		<a href="admin.php"><div class="m_basliklar"><img src="admin_images/home.png" width="15px" height="15px">&nbsp;Ana Sayfa</div></a>
				
		<a href="admin.php?s=kullanici"><div class="m_basliklar"><img src="admin_images/kullanici.png" width="15px" height="15px">&nbsp;Kullanıcılar</div></a>
				
		<a href="admin.php?s=sayfalar"><div class="m_basliklar">
		<img src="admin_images/sayfalar.png"width="15px" height="15px">&nbsp;Sayfa İçerikleri</div></a>
				
		<a href="admin.php?s=duyurular"><div class="m_basliklar">
			<img src="admin_images/duyuru.png"width="15px" height="15px">&nbsp;Duyurular</div></a>
				
		<a href="admin.php?s=haberler"><div class="m_basliklar">
			<img src="admin_images/haber.png"width="15px" height="15px">&nbsp;Haberler</div></a>
						
		<a href="cikis.php"><div class="cikis"><img src="admin_images/cikis.png" width="25px" height="25px"></div></a>
				
			</div>

	</div>
<!--banner bitiş-->
<div class="hizalama_bitir"></div>
		
		<div class="body">
			<?
        	include($sayfa.".php");
			?>
		</div>

	</div>
			
		
</div>
</body>
</html>