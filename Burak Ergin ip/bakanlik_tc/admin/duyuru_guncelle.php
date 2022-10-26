<?
include("guvenlik.php");

$sql=" select * from duyurular where d_id='".$_GET['g_id']."' ";

$sql_cls=mysql_query($sql);
while($veri=mysql_fetch_assoc($sql_cls))
{
?>

<form name="form1" method="post" action="duyuru_guncelle_islem.php?g_id=<? echo $_GET['g_id'];?>">
 
 <div class="s_ekle_govde">
<link href="css/sayfa_ekle.css" type="text/css" rel="stylesheet"/>

	<div class="s_bilgileri">DUYURU GÜNCELLE</div>
	
	<div class="hizalama_bitir"></div>
	
<div class="s_basligi">Duyuru Başlığı</div>
	
	<div class="hizalama_bitir"></div>
	
	<div>
	<input class="metin" name="baslik" type="text" id="textfield" size="50" 
	value="<? echo $veri['d_baslik'];?>">
	</div>
	
	<div class="hizalama_bitir"></div>
	
<div class="s_icerigi">Duyuru İçeriği</div>
	
	<div class="hizalama_bitir"></div>
	
	<div> 
		<?
    
            $oFCKeditor = new FCKeditor('icerik');
            $oFCKeditor->BasePath = 'fckeditor/';
            $oFCKeditor->Value =$veri['d_icerik'];
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