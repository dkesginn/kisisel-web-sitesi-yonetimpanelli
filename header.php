<?php
require_once "Admin/baglanti.php";
$ayar = $baglan->prepare("SELECT * from ayarlar where id=?");

$ayar->execute(array(1));

$ayarcek = $ayar->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php echo $ayarcek["baslik"];  ?></title>

    <meta name="description" content="<?php echo $ayarcek['baslik'] ?>">
    <meta name="keywords" content="<?php echo $ayarcek['anahtarkelime'] ?>">
    <meta name="author" content="Davut Kesgin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />


    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">

    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">


    <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">


    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:<?php echo $ayarcek['mailadres']  ?>"><i class="icofont-support-faq mr-2"></i><?php echo $ayarcek['mailadres']  ?></a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?php echo $ayarcek['adres'] ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+905054715025">
                                <span>İletişim : </span>
                                <span class="h4"><?php echo $ayarcek['telefon'] ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6"><a class="navbar-brand" href="index.php">

                            <h3><?php echo $ayarcek['baslik'] ?></h3>
                        </a></div>
                </div>


                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Anasayfa</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="hakkimizda.php">Hakkımızda</a></li>


                        <li class="nav-item"><a class="nav-link" href="hizmetler.php">Hizmetler</a></li>
                        <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>