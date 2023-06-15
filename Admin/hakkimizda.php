<?php
require_once "header.php";
require_once "sidebar.php";

$hakkimizda = $baglan->prepare("SELECT * from hakkimizda where hakkimizda_id=?");

$hakkimizda->execute(array(1));

$hakkimizdacek = $hakkimizda->fetch(PDO::FETCH_ASSOC);


?>

<div class="content-wrapper">




    <section class="content">


        <div class="row">





            <section class="col-lg-12 connectedSortable">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Hakkımızda</h3>
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
                                <label for="exampleInputEmail1">Hakkımızda Başlık</label>
                                <input name="baslik" value="<?php echo $hakkimizdacek['hakkimizda_baslik'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık Giriniz">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hakkımızda Yazısı</label>
                                <textarea name="aciklama" id="editor1" cols="80" rows="8"><?php
                                                                                            echo $hakkimizdacek['hakkimizda_aciklama'];
                                                                                            ?></textarea>
                            </div>



                        </div>


                        <div class="box-footer">
                            <button name="hakkimizdakaydet" type="submit" class="btn btn-primary">Kaydet</button>
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