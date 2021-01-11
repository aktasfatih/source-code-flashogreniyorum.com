<? session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Konu Kaydet</title>
</head>

<body>
<?php
$_SESSION['eskiyazi']=$_POST['icerik'];

if($_SESSION['durum']="girdi" and $_SESSION['kulladi']="admin"){
	if($_POST['baslik']=="" or $_POST['icerik']==""){
		echo '<script type="text/javascript">alert("Boş bırakılan yerler var!");</script>';
		echo '<meta http-equiv="refresh" content="0;URL=index.php?konum=konuekle">';
	}else{
		include('../data.php');
		$baglanti=@mysql_connect($host,$host_kullanici,$host_sifre);
		if(!$baglanti){
			echo "Bağlantı hatası<br>";
			echo "Hata No:".mysql_errno();
			echo "<br>Neden: ".mysql_error();
		}
		$veritabani=@mysql_select_db($vt_adi,$baglanti);
		if(!$veritabani){
			echo "Veri tabanı<br>";
			echo "Hata No:".mysql_errno();
			echo "<br>Neden: ".mysql_error();
		}
		$secilen= array(
		'baslik' => FILTER_SANITIZE_STRING,
		'icerik' => FILTER_SANITIZE_STRING,
		);
		$giris=filter_input_array(INPUT_POST,$secilen);
		$katogori;
		
		$sorgu=mysql_query("INSERT INTO flash_konular(baslik,yazi,yazan,katogori_ismi) VALUES('".$_POST['baslik']."','".$_POST['icerik']."','".$_SESSION['kulladi']."','".$_POST['katogori']."')");
		if(!$sorgu){
			echo "Sorgu Hatası<br>";
			echo "Hata No:".mysql_errno();
			echo "<br>Neden: ".mysql_error();	
		}else{
			echo '<script type="text/javascript">alert("Konu Eklendi!");</script>';
			unset($_COOKIE['yazi']);
			
			/* konu sayfasına gidicek */
			echo '<meta http-equiv="refresh" content="0;URL=index.php">';
		}
	}
}else{
	echo "İzinsiz Giriş";	
}
?>
</body>
</html>