<? session_start(); ?>
<?
	echo "<head>";
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	echo "<title>Giriş</title>";
	echo "</head>";
	echo "<body bgcolor='#000000'>";
	if(!isset($_POST['kullaniciadi']) or !isset($_POST['sifre'] )or $_POST['sifre']=="" or $_POST['kullaniciadi']==""){
		echo "<font color='white'>Gerekli bilgiler yok.</font><br>";
		die("Program sonlandırıldı.");
	}else{
		$secilen= array(
		'kullaniciadi' => FILTER_SANITIZE_STRING,
		'sifre' => FILTER_SANITIZE_STRING,
		);
		$giris=filter_input_array(INPUT_POST,$secilen);
		
		$kullaniciadi=trim($giris['kullaniciadi']);
		$sifre=trim($giris['sifre']);
		
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
		
		$sorgu=mysql_query("SELECT * FROM kullanicilar WHERE kullanici='$kullaniciadi' and sifre='$sifre' ");
		$uyebul = mysql_num_rows($sorgu);
		$bilgi=mysql_fetch_array($sorgu);
		
		
		if($uyebul > 0){ 
			
			$_SESSION['kulladi'] = $kullaniciadi; 
			$_SESSION['durum']="girdi";
			$_SESSION['uyeturu']=$bilgi['durum'];
			
			echo '<script type="text/javascript">alert("Başarıyla giriş yaptınız! Profil sayfanıza yönlendirileceksiniz...");</script>';
			echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    }else{ 
        echo '<script type="text/javascript">alert("Kullanıcı adı veya şifreniz yanlış!");</script>';
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    }
		
		
		
	}
?>

</body>
</html>