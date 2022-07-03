<?php
header('Content-type: application/json'); // Tarayıcıdan girdiğimizde JSON formatında görelim.
require_once __DIR__ . '/apidb.php';


$db = new Connect;
$blog = array();
$sayac = 0; // İndis sayacımız
$cek = $db->prepare('SELECT * FROM yazi ORDER BY k_id DESC');
$cek->execute();
while ($row = $cek->fetch(PDO::FETCH_ASSOC)) {

    $jsonDizisi[$sayac]['k_id'] = $row["k_id"]; // json dizimizin kisiler -> indis -> id değerine çektiğimiz değeri atadık.
    $jsonDizisi[$sayac]['kullanici_adi'] = $row["kullanici_adi"]; // json dizimizin kisiler -> indis -> isim değerine çektiğimiz değeri atadık.
    $jsonDizisi[$sayac]['insta'] = $row["insta"]; // json dizimizin kisiler -> indis -> isim değerine çektiğimiz değeri atadık.
    $jsonDizisi[$sayac]['durum'] = $row["durum"]; // json dizimizin kisiler -> indis -> soyisim değerine çektiğimiz değeri atadık.
    $sayac++; // İndis sayacımızı arttırdık.
}

echo json_encode([$jsonDizisi]); //json dizimizi json formatına encode edip yazdırdık.


