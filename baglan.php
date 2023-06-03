<?php 

 $baglan = new PDO("mysql:host=localhost;dbname=ogrenciler;charset=utf8", "root", "şifre");
$baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$baglan->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$baglan->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>
