<?	
		if($_SESSION['kulladi']="admin"){
			if($_GET['no']!=""){
					$no=$_GET['no'];
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
					$bilgibul=mysql_query("SELECT * FROM flash_konular WHERE id='".$no."'",$baglanti);
					while($veri=mysql_fetch_array($bilgibul)){
					$kopyala=mysql_query("INSERT INTO konular_silinen(baslik,icerik) VALUES ('".$veri['baslik']."','".$veri['yazi']."')",$baglanti);
					
					}
					$sorgu=mysql_query("DELETE FROM flash_konular WHERE id='".$no."'",$baglanti);
					if(!$sorgu){
						echo "Sorgu Hatası<br>";
						echo "Hata No:".mysql_errno();
						echo "<br>Neden: ".mysql_error();	
					}else{
						echo '<script type="text/javascript">alert("Seçilen Konu yedeği alınarak silindi.");</script>';
						echo '<meta http-equiv="refresh" content="0;URL=index.php?konum=konulistesi">';
					}
					
					
					
				}else{
		echo '<script type="text/javascript">alert("Gerekli Bilgiler Yok!");</script>';
			
			/* Admin sayfasına gidicek */
			echo '<meta http-equiv="refresh" content="0;URL=index.php?konum=konulistesi">';
	}
		
		}
?>