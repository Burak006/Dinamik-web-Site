<?

$sql=" select * from kullanici where k_id ='".$_GET['gun_id']."' ";
$sql_cls=mysql_query($sql);
while($kayit=mysql_fetch_assoc($sql_cls))
{
?>


<div>
	
<form name="form1" method="post" action="kullanici_guncelle_islem.php?g_id=<? echo $_GET['gun_id'];?>">
	
<link href="css/kullanici.css" type="text/css" rel="stylesheet"/>
	
	<div class="kayit_govde">
	
	<div class="k_bilgileri">
	<img src="admin_images/kullanici.png" width="16px" height="16px"><br>Kullanıcı Güncelle</div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="k_adi">Kullanıcı Adı:</div>
	<div><label for="textfield"></label>
        <input class="text" type="text" name="kad" id="textfield" value="<? echo $kayit['k_adi'];?>"></div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="k_sifre">Kullanıcı Şifre:</div>
	<div>
	<input class="text" type="text" name="ksifre" id="textfield2" value="<? echo $kayit['k_sifre'];?>"></div>

<div class="hizalama_bitir"></div>	

	<div class="k_durum">Kullanıcı Durum:</div>
	<div><label for="select"></label>
		<select class="liste_kategori" name="kdurum" id="select">
          <option value="1" <? if($kayit['k_durum']==1){ echo "selected";}?>>Aktif</option>
          <option value="0" <? if($kayit['k_durum']==0){ echo "selected";}?>>Pasif</option>
        </select>
	</div>

<div class="hizalama_bitir"></div>

	<div><input class="kaydet" type="submit" name="button" id="button" value="GÜNCELLE"></div>

<div class="hizalama_bitir"></div>
	
	</div>
</form>

</div>

<? }?>
