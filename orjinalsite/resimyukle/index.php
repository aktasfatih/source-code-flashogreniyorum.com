<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if (!isset($_REQUEST["seenform"])) {
?>
<form enctype="multipart/form-data" action="index.php" method="post">
Upload file: <input name="userfile" type="file">
<input type="submit" value="Upload">
<input type="hidden" name="seenform">
</form>
<?php
} else {
$uploaded_dir = "./resimler/";
$filename = $_FILES["userfile"]["name"];
$path = $uploaded_dir . $filename;

print "Temporary name: " . $_FILES['userfile']['tmp_name'] . "<br>";
print "Original name: $filename<br>";
print "Destination: $path<br>";

if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $path)) {
print "Uploaded file moved";
echo "URL: ";
echo "<A href='resimler/".$_FILES['userfile']['name']."'>";

echo "resimyukle/resimler/".$_FILES["userfile"]["name"];
echo "</A>";

include('../data.php');
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
$sorgu=mysql_query("INSERT INTO ders_resimleri(konum) VALUES ('resimler/".$_FILES['userfile']['name']."')");
if($sorgu){
	echo "<br>Dosya veritabanına işlendi";	
}else{
 echo "Dosya veritabanına işlenemedi<br>NO :";
 echo mysql_errno();
 echo "<br>nedeni: ".mysql_error();	
}
// do something with the file here
} else {
print "Move failed";
}
}

?>