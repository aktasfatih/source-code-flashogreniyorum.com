<? session_start();

if($_SESSION['durum']="girdi" and $_SESSION['kulladi']="admin"){
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
	$sorgu=mysql_query("SELECT * FROM flash_konular");
	if(!$sorgu){
		echo "Sorgu Hatası<br>";
		echo "Hata No:".mysql_errno();
		echo "<br>Neden: ".mysql_error();	
	}
	while($veri=mysql_fetch_array($sorgu)){
		$no=$veri['id'];
		echo "No:".$veri['id'];
		echo "   <a href='konusil.php?no=".$no."'>[SİL]</a>";
		
		echo "<br>Başlık: ".$veri['baslik'];
		echo "<br>İçerik: ".substr($veri['yazi'],0,150)."<br><br>";
	}
}