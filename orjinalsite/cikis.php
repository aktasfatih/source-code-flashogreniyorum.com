<?
session_start(); ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kendi Flash Oyun'unuzu / Sitenizi  Yapın - Flashogreniyorum.com</title>
</head>
<?
session_destroy();
echo '<script type="text/javascript">alert("Başarıyla çıkış yaptınız! Ana sayfaya yönlendirileceksiniz...");</script>';
echo '<meta http-equiv="refresh" content="0;URL=index.php">';
?>