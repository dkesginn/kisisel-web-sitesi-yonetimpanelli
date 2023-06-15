<?php
require_once "baglanti.php";



if (isset($_POST['ayarkaydet'])) {

    $baslik = $_POST['baslik'];
    $site_adi = $_POST['site_adi'];
    $anahtar = $_POST['anahtar'];
    $mail = $_POST['mail'];
    $adres = $_POST['adres'];
    $telefon = $_POST['telefon'];
    $instagram = $_POST['instagram'];
    $github = $_POST['github'];
    $linkedin = $_POST["linkedin"];
    $yukle = $baglan->prepare("UPDATE ayarlar SET 

baslik=?,
site_adi=?,
anahtarkelime=?,
mailadres=?,
adres=?,
telefon=?,
instagram=?,
github=?,
linkedin=?

where id=1



");

    $degistir = $yukle->execute(array(


        $baslik,
        $site_adi,
        $anahtar,
        $mail,
        $adres,
        $telefon,
        $instagram,
        $github,
        $linkedin

    ));
    if ($degistir) {
        Header("Location:ayarlar.php?yukleme=basarili");
    } else {
        Header("Location:ayarlar.php?yukleme=basarisiz");
    }
}




if (isset($_POST['hakkimizdakaydet'])) {
    //değişkenlerimizi alıyoruz.
    $baslik = $_POST['baslik'];
    $aciklama = $_POST['aciklama'];



    $yukle = $baglan->prepare("UPDATE hakkimizda SET 

hakkimizda_baslik=?,
hakkimizda_aciklama=?



where hakkimizda_id=1



");

    $degistir = $yukle->execute(array(


        $baslik,
        $aciklama


    ));
    if ($degistir) {
        Header("Location:hakkimizda.php?yukleme=basarili");
    } else {
        Header("Location:hakkimizda.php?yukleme=basarisiz");
    }
}
