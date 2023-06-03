<?php
    //PHP İle RESTful API Kullanımı
    $token = sha1(md5("sefa"));

    //GET İŞLEMİ İLE KAYDI LİSTELEDİK
   	$veriler = array("token" => $token, "id" => "4");

    //POST İŞLEMİ İLE KAYIT EKLEDİK
    //$veriler = array("token" => $token, "adsoyad" => "Ahmet", "tckimlik" => "555555", "adres" => "Çankaya - Ankara"); 


    //PUT İŞLEMİ İLE KAYDI GÜNCELLEDİK
    //$veriler = array("token" => $token, "adsoyad" => "Sultan", "tckimlik" => "999999", "adres" => "Merkez - İstanbul", "id" => "2");

    //DELETE İŞLEMİ İLE KAYDI SİDİK
 	//$veriler = array("token" => $token, "id" => "6");


    $curl = curl_init("http://localhost/API/api.php");

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET"); //GET, POST, PUT, DELETE
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($veriler));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $cevap = curl_exec($curl);
    curl_close($curl);

    $sonuc = json_decode($cevap, true);

    echo "<b>Sonuç: $sonuc[kod] / $sonuc[mesaj]</b><br><br>";

    if ($sonuc["kod"] == "200") {
        foreach($sonuc["icerik"] as $icerik) {
            foreach($icerik as $anahtar => $deger) {
                echo "$anahtar: $deger<br>";
            }
            echo "<br><br>";
        }
    }


?>