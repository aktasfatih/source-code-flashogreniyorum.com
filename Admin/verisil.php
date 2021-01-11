<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?

			$host="localhost"; 			$vt_adi="flasmcom_test";
			$kullanici="flasmcom_test"; $sifre="test1";
			
			$db=@mysql_connect($host,$kullanici,$sifre) or die("Host'a bağlanamadı");
			$veritabani=@mysql_select_db($vt_adi,$db) or die("Veritabanına bağlanamdı.");
			$id=$_GET['id'];
			$sorgu=mysql_query("DELETE FROM Konular WHERE id='$id'",$db);
			
			if($sorgu){
			echo "<br>".$id."</br> numaralı konu silindi";
			}else{
				
				echo "Hata No: ".mysql_errno()."<br>";
				echo "Hata Açılaması: ".mysql_error();
					
			}
			mysql_close($db);

?>

</body>
</html>