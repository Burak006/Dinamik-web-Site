
<div>
<link href="css/sayfalar.css" type="text/css" rel="stylesheet"/>

	<a href="admin.php?s=sayfa_ekle"><div class="sayfa_ekle">
		
	<img src="admin_images/ekle.png" width="16" height="16">&nbsp;Sayfa ekle</div></a>

<div class="hizalama_bitir"></div>
	
	<div>
	
 <tr>
	<td>
		<table width="1200" border="0" align="center" cellspacing="0" cellpadding="5">
      <tr>
        <td width="63"  style="color: #3399FF;"><b>Sayfa No</b></td>
        <td width="245" style="color: #3399FF;"><b>Sayfa Başlık</b></td>
        <td width="154" style="color: #3399FF;"><b>İşlemler</b></td>
	</tr>
      <?
	  $i=0;
	  	$sql=" select * from sayfalar order by s_id asc ";
		$sql_calistir=mysql_query($sql);
		while($kayit=mysql_fetch_assoc($sql_calistir))
		{
			$i=$i+1;
			if($i%2==0)
			{$renk="#9999FF";}
			else{$renk="#fff";}
      ?>
      <tr bgcolor="<? echo $renk;?>">
        <td><? echo $i; ?></td>
        <td><? echo $kayit['s_baslik'];?></td>
        <td><a href="sayfa_sil_islem.php?sil_id=<? echo $kayit['s_id'];?>"><span style="color:#FF0004">SİL</span></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php?s=sayfa_guncelle&g_id=<? echo $kayit['s_id'];?>"><span style="color:#090">GÜNCELLE</span></a></td>
      </tr>
      <?
		}
	  ?>
      
   	 </table>
	</td>
</tr>
		
	</div>
	
	
</div>













