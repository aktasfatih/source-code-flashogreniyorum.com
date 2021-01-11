<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Konu Düzenleme Bölümü - www.flashogreniyorum.com</title>
</head>

<body>

<?
include('data.php');
$baglanti=@mysql_connect($host,$host_kullanici,$host_sifre);
if(!$baglanti){
	echo "Bağlantı Sağlanamadı<br>";
	echo "Hata no: ".mysql_errno()."<br>";
	echo "Hata nedeni: ".mysql_error();
	die("Program sonlandırıldı.");
}
$veritabani=@mysql_select_db($vt_adi,$baglanti);
if(!$veritabani){
	echo "Veritabanı Sağlanamadı<br>";
	echo "Hata no: ".mysql_errno()."<br>";
	echo "Hata nedeni: ".mysql_error();
	die("Program sonlandırıldı.");
}	

if(!isset($_SESSION['kulladi']) or $_SESSION['kulladi'] !="admin" or !isset($_POST['konuno'])){
echo "Düzenleme başarısız lütfen <A href='index.php'>Anasayfa</a>'ya gidiniz.";	
}else{
	$yy=$_POST['yy'];
	$yb=$_POST['yb'];
	$konuno=$_POST['konuno'];
	$sorgu=mysql_query("UPDATE flash_konular SET yazi='$yy' WHERE id='$konuno'",$baglanti);
	if(!$sorgu){
		echo "Sorgu Hatası<br>";
		echo "Hata No:".mysql_errno();
		echo "<br>Neden: ".mysql_error();	
	}	
	echo "Değiştirme başarılı <A href='index.php'>Anasayfa</a>";
}

?>

</body>
</html>