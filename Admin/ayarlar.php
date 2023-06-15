<?php
require_once "header.php";
require_once "sidebar.php";

$ayar = $baglan->prepare("SELECT * from ayarlar where id=?");

$ayar->execute(array(1));

$ayarcek = $ayar->fetch(PDO::FETCH_ASSOC);


?>

<div class="content-wrapper">




    <section class="content">


        <div class="row">





            <section class="col-lg-12 connectedSortable">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ayarlar</h3>
                    </div>

                    <?php
                    if (@$_GET['yukleme'] == "basarili") { ?>
                        <b style="color: green;">Yükleme İşleminiz Başarılı</b>
                    <?php
                    } elseif (@$_GET["yukleme"] == "basarisiz") { ?>
                        <b style="color: red;">Yükleme İşleminiz Başarısız</b>
                    <?php   }
                    ?>

                    <form action="yukle.php" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title-Başlık</label>
                                <input name="baslik" value="<?php echo $ayarcek['baslik'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık Giriniz">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Site Adı</label>
                                <input name="site_adi" value="<?php echo $ayarcek['site_adi'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Açıklama Giriniz">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Anahtar Kelime</label>
                                <input name="anahtar" value="<?php echo $ayarcek['anahtarkelime'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Anahtar Kelime Giriniz">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mail Adresi</label>
                                <input name="mail" value="<?php echo $ayarcek['mailadres'] ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Mail Giriniz">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Adres</label>
                                <input name="adres" value="<?php echo $ayarcek['adres'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Adres Giriniz">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telefon</label>
                                <input name="telefon" value="<?php echo $ayarcek['telefon'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefon Giriniz">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">İnstagram</label>
                                <input name="instagram" value="<?php echo $ayarcek['instagram'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="İnstagram Adresi Giriniz">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Github</label>
                                <input name="github" value="<?php echo $ayarcek['github'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Twitter Adresi Giriniz">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Linkedin</label>
                                <input name="linkedin" value="<?php echo $ayarcek['linkedin'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Linkedin Adresi Giriniz">
                            </div>


                        </div>


                        <div class="box-footer">
                            <button name="ayarkaydet" type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>
                </div>

            </section>

        </div>


    </section>

</div>

<?php
require_once "footer.php";
?>