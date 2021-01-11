<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Veri Değiştirme</title>
</head>

<body>
<?
if(!isset($_GET['baslik']) or !isset($_GET['icerik']) or !isset($_GET['id'])){

echo "gerekli bilgiler yok";

} else {
echo "<table align='center' border='1'>";
echo "<tr><td>";
	echo "<form action='degisti.php' method=GET>";
	echo "<h1>Değiştirme Formu</h1>";
    
	$id=$_GET['id'];
	echo $_GET['id']." numaralı mesaj:<br>";
    echo "Başlık:<br><input type='text' name='yenibaslik' value='".$_GET['baslik']."' /><br />";
     $icerik=$_GET['icerik'];
    echo "İçerik:<br><textarea name='yeniicerik'>".$icerik."</textarea><br>";
	echo "<input type='submit' value='Değiştir'>";
}
?>
	
	</form>
    </td></tr></table>
</body>
</html>