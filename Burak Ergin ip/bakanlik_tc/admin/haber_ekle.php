<?
include("guvenlik.php");
?>


<form name="form1" method="post" action="haber_ekle_islem.php">
	
 <div class="s_ekle_govde">
	 
<link href="css/sayfa_ekle.css" type="text/css" rel="stylesheet"/>
	
<div class="s_bilgileri">HABER KAYIT</div>
	
	<div class="hizalama_bitir"></div>
	
<div class="s_basligi">Haber Başlığı</div>
	
	<div class="hizalama_bitir"></div>
	
<div><input class="metin" name="baslik" type="text" id="textfield"></div>
	
	<div class="hizalama_bitir"></div>
	
<div class="s_icerigi">Haber İçeriği</div>
	
	<div class="hizalama_bitir"></div>
	
	 <div>
	 <?
            $oFCKeditor = new FCKeditor('icerik');//nesne ismi
            $oFCKeditor->BasePath = 'fckeditor/';
            $oFCKeditor->Value ='';
            $oFCKeditor -> Height = 450; 
            $oFCKeditor->Create();
        ?>
	 </div>

	<div class="hizalama_bitir"></div>

<div><input class="buton" type="submit" name="button" id="button" value="KAYDET"></div>
	<div class="hizalama_bitir"></div>
</div>
	
</form>
