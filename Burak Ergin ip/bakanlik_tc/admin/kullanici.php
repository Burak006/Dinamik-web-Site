
<div>
	
<form name="form1" method="post" action="kullanici_kayit.php">
	
<link href="css/kullanici.css" type="text/css" rel="stylesheet"/>
	
	<div class="kayit_govde">
		
	<div class="k_bilgileri">
	<img src="admin_images/kullanici.png" width="16px" height="16px"><br>Kullanıcı Kayıt</div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="k_adi">Kullanıcı Adı:</div>
	<div><input class="text" type="text" name="kad" id="textfield"></div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="k_sifre">Kullanıcı Şifre:</div>
	<div><input class="text" type="text" name="ksifre" id="textfield2"></div>

<div class="hizalama_bitir"></div>	

	<div class="k_durum">Kullanıcı Durum:</div>
	<div><label for="select"></label>
		<select class="liste_kategori" name="kdurum" id="select">
          	<option value="1">Aktif</option>
            <option value="0">Pasif</option>
        </select>
	</div>

<div class="hizalama_bitir"></div>

	<div><input class="kaydet"type="submit" name="button" id="button" value="KAYDET"></div>
		
	</div>
	
<div class="hizalama_bitir"></div>
</form>

<div class="hizalama_bitir"></div>
<tr>
    <td>
		<table width="800" align="center" border="0" cellspacing="0" cellpadding="5">
     <tr>
        <td width="100"  style="color: #3399FF; text-align:center;"><b>Kullanıcı No</b></td>
        <td width="100"  style="color: #3399FF; text-align:center;"><b>Kullanıcı Adı</b></td>
		<td width="100"  style="color: #3399FF; text-align:center;"><b>Kullanıcı Durumu</b></td> 
		<td width="100"  style="color: #3399FF; text-align:center;"><b>Tarih</b></td> 
        <td width="100"  style="color: #3399FF; text-align:center;"><b>İşlemler</b></td>
	</tr>
      <?
	  $i=0;
	  	$sql=" select * from kullanici order by k_id desc ";
		$sql_cls=mysql_query($sql);
		while($kayit=mysql_fetch_assoc($sql_cls))
		{
			$i++;
			if($i%2==1)
			{$renk="#9999FF";}
			else
			{$renk="#fff";}
      ?>
      <tr bgcolor="<? echo $renk;?>">
        <td width="120px" align="center"><? echo $i;?></td>
        <td width="270px" align="center"><? echo $kayit['k_adi'];?></td>
        <td width="250px" align="center"><? if($kayit['k_durum']==1){?><span style="color:#090">Aktif</span><? }else{?><span style="color:#FF0004">Pasif</span><? }?></td>
		  <td width="250px" align="center">
		<? echo substr($kayit['k_tarih'],2,2),".";?>
		<? echo substr($kayit['k_tarih'],5,2),".";?>
		<? echo substr($kayit['k_tarih'],0,4);?>
		</td>
        <td width="190px" align="center"><a href="kullanici_sil.php?sil_id=<? echo $kayit['k_id'];?>"><span style="color:#FF0004">SİL</span></a>
	&nbsp;<a href="admin.php?s=kullanici_guncelle&gun_id=<? echo $kayit['k_id'];?>"><span style="color:#090">GÜNCELLE</span></a></td>
      </tr>
      <? 
	  	} 
	  ?>
      
    </table>
	</td>
  </tr>

</div>






