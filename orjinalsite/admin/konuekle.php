<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KonuEkle</title>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

</head>

<body>
<form action="konueklendi.php" method='post'>


<?


if($_SESSION['durum']="girdi" and $_SESSION['kulladi']="admin"){
	
	echo "Katogori:&nbsp;<select name='katogori'>";
	if($_SESSION['durum']='girdi' and $_SESSION['kulladi']='admin'){
		echo "<option value='flash_dersi'>Flash Dersi</option>";	
	}
	echo "<option value='genel'>Genel</option>";
	echo "</select><br>";
	echo "Başlık: <br>";
	echo "<input type='text' maxlength='150' name='baslik'><br>";
	$eskiyazi=$_SESSION['eskiyazi'];
	echo "İçerik:<textarea name='icerik'  rows='10' cols='80'>".$eskiyazi."</textarea><br>";
	echo "<br><div align='center'><input type='submit' value='Kaydet'></div>";
}else{
	echo "Hatalı giriş";	
}

?>
<script type='text/javascript'>
	CKEDITOR.replace( 'icerik' );
</script>


</form>
</body>
</html>