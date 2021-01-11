<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?

	$host="localhost"; $vt_adi="flasmcom_test";
	$kullanici="flasmcom_test"; $sifre="test1";
	
	$db=@mysql_connect($host,$kullanici,$sifre) or die("Hosta ulaşılamıyor");
	
	$veritabani=@mysql_select_db($vt_adi,$db) or die("Veri tabanına ulaşılamıyor.");
	
	$sorgu=mysql_query("SELECT * FROM Konular");
	$kayit=mysql_num_rows($sorgu);
	
	while($veri=mysql_fetch_array($sorgu)){
		echo $veri['id'];;
		echo $veri['baslik'];
		echo "<br>";
	}

?>
</body>
</html>