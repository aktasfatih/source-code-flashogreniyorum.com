<?
if($_SESSION['girdimi']="girdi" and $_SESSION['kulladi'] !=""){
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo "<font color='white'>".$_SESSION['kulladi']."'ismiyle giriş yaptınız. &nbsp;&nbsp; ";
echo "<A href='profil.php' style='text-decoration: none; color:white'>Profil</A>&nbsp;&nbsp;";
echo "   <A href='cikis.php' style='text-decoration: none;color:white'> Çıkış </A></font>";
}
?>
