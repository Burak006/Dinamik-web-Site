<?
include("guvenlik.php");

$sql=" select * from sayfalar where s_id='".$_GET['g_id']."' ";

$sql_cls=mysql_query($sql);
while($veri=mysql_fetch_assoc($sql_cls))
{
?>



<form name="form1" method="post" action="sayfa_guncelle_islem.php?g_id=<? echo $_GET['g_id'];?>">
 
 <div class="s_ekle_govde">
<link href="css/sayfa_ekle.css" type="text/css" rel="stylesheet"/>

	<div class="s_bilgileri">SAYFA GÜNCELLE</div>
	
	<div class="hizalama_bitir"></div>
	
<div class="s_basligi">Sayfa Başlığı</div>
	
	<div class="hizalama_bitir"></div>
	
	<div>
	<input class="metin" name="baslik" type="text" id="textfield" size="50" value="<? echo $veri['s_baslik'];?>">
	</div>
	
	<div class="hizalama_bitir"></div>
	 
<div class="s_basligi">Sayfa İç Başlığı</div>
	
	<div class="hizalama_bitir"></div>
	
	<div>
	<input class="metin" name="icbaslik" type="text" id="textfield2" size="50" value="<? echo $veri['s_ic_baslik'];?>">
	</div>
	
	<div class="hizalama_bitir"></div>
	
<div class="s_icerigi">Sayfa İçeriği</div>
	
	<div class="hizalama_bitir"></div>
	
	<div> 
		<?
    
            $oFCKeditor = new FCKeditor('icerik');
            $oFCKeditor->BasePath = 'fckeditor/';
            $oFCKeditor->Value =$veri['s_icerik'];
            $oFCKeditor -> Height = 450; 
            $oFCKeditor->Create();
        ?>
	</div>

	<div class="hizalama_bitir"></div>

<div><input class="buton" type="submit" name="button" id="button" value="GÜNCELLE"></div>
	<div class="hizalama_bitir"></div>
</div>
	
</form>
<? }?>