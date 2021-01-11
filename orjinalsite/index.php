<? session_start(); ?>

<em></em><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kendi Flash Oyun'unuzu / Sitenizi  Yapın - Flashogreniyorum.com</title>
</head>

<body bgcolor='black'>
	
<table align='center' width='1000' bgcolor='white' border='0' cellpadding="0" cellspacing="0">
	<tr><td valign="top">
    
<!--Bu sitenin Headeri--> 
    
   	  <table width='1000' height='200' border='0' align='center' cellpadding="0" cellspacing="0" background='../img/Goruntudosyasi/Header.gif' name='header'>
			<tr><td></td></tr></table>
            
<!-- Üye girişi veya Arama veya çıkış -->
<?
if(isset($_SESSION['durum'])){
$durum=$_SESSION['durum'];
if($durum="girdi"){
		echo "<table height='25' width='1000' align='center' border='0' cellpadding='0' cellspacing='0' bgcolor='#C30D23' ><tr><td valign='middle' align='left'>";  
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		echo "&nbsp;<font color='white'>".$_SESSION['kulladi']." 'ismiyle giriş yaptınız. &nbsp;-&nbsp; ";
		echo "<A href='profil.php' style='text-decoration: none; color:white'>Profil -</A>&nbsp;&nbsp;";
		if($_SESSION['kulladi']="admin"){
		echo "<A href='admin/index.php' style='text-decoration: none; color:white'>Admin Panel'i -</A>&nbsp;&nbsp";
		echo "<A href='resimyukle/index.php' style='text-decoration: none; color:white'>Resim Yükleme Bölümü -</A>&nbsp;&nbsp";
		}
		echo "   <A href='cikis.php' style='text-decoration: none;color:white'> Çıkış </A></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "</td>";
		echo "<td  align='right' valign='middle'>";
		include('aramaformu.php');
		echo "</td></tr></table>";
		
}
}else{
			echo "<table height='25' width='1000' align='center' border='0' cellpadding='0' cellspacing='0' bgcolor='#C30D23'><tr ><td align='left'>";  
    		include('uyegirisi.php');
            echo "</td>";
            echo "<td width='250' align='right' valign='middle'>";
            include('aramaformu.php');
            echo "</td></tr></table>";
}
			?>
            
 <!-- Butonlar -->            
<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="30">
  <param name="movie" value="../../img/kirmizimenu.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="6.0.65.0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
  <param name="expressinstall" value="../../Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="../../img/kirmizimenu.swf" width="1000" height="30">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="6.0.65.0" />
    <param name="expressinstall" value="../../Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>

            
<!-- Konular Bölümü -->
              
     
     <table width='255' border='0' cellpadding='0' cellspacing='0' align='left'>
     <tr><td align='center'>
     <br />
     <table align='center' width='200' border='0' cellspacing='0' cellpadding='0' bordercolor="#990000">
         <tr><td align='center'>
         <br />
         <img src='../img/flash_dersleri.gif' border='0' alt='Flash dersleri - flashogreniyorum.com' />
         <br /><br />
     <? include('konular.php'); ?>
     <br />
       </td></tr>
     </table>
     
     </td></tr>
     <tr><td>
     <br /><br />
                <? include('data/solreklamlar.html'); ?>
     </td></tr>
     
     </table>
     
     <!-- İçerik Bölümü -->
    <table width='745' align='right' height='25'border='0' cellpadding='0' cellspacing='0' >
    <tr><td height='25' align='center'>
    <br />
    	<img src='../img/en_son_yazilan_konular.gif' border='0' alt='En son yazılan flash dersleri / konuları - flashogreniyorum.com' />
    </td></tr>
    <tr><td align='center' valign='top'>
    	<? include('icerik_listele.php'); ?>
    </td></tr>
    </table>
    </td></tr></table>
    <!-- Sitenin Footeri -->
    
   <table align='center' border='0' height='150' width='1000' background='../../img/Goruntudosyasi/footer.gif'>
    	<tr><td align='center' valign='middle'>
        	<font color='white'>Bu site 'www.flashogreniyorum.com' sahibi tarafından tasarlanmış ve kodlanmıştır.
            <br />İletişim için: akfatih2@gmail.com<br />
            Eklenen Tagler: Flash Dersleri, Flash, Dersler, flash eğitim videoları, as2, as3, actions script,action, script,videolu ders, kodlama, oyun, programlama, program, www.flashogreniyorum.com, flash,ogreniyorum.com, .com<br /><br />Tüm hakları saklıdır.</font> 
        </td></tr>
	</table>
    
    
    
    
    
</table>  
</body>
</html>