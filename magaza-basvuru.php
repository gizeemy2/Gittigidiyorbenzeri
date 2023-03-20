
<?php require_once("header.php") ?>
<?php    
 if (!isset($_SESSION['userkullanici_id'])) {
 Header("Location:404.php");
 exit;   
}?>
                <!-- Inner Page Banner Area Start Here -->
            <div class="pagination-area bg-secondary">
                <div class="container">
                    <div class="pagination-wrapper">
                       
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->          
            <!-- Settings Page Start Here -->
            <div class="settings-page-area bg-secondary section-space-bottom">
                <div class="container">


                    <div class="row settings-wrapper">

                    <?php
                    if (isset($_GET['durum'])=="hata") {?>

                    <div class="alert alert-danger">
                        <strong>Hata!</strong>İşlem Başarısız
                    </div>
                        
                    <?php }else if (isset($_GET['durum'])=="ok") 
                    {?>

                        <div class="alert alert-success">
                            <strong>Bilgi!</strong> İşlem Başarılı
                        </div>
                            
                        <?php }
                        else if (isset($_GET['durum'])=="eskisifrehata") 
                        {?>
    
                            <div class="alert alert-danger">
                                <strong>Bilgi!</strong>Eski şifre hata
                            </div>
                                
                            <?php }
                            else if (isset($_GET['durum'])=="sifreleruyusmuyor") 
                        {?>
    
                            <div class="alert alert-danger">
                                <strong>Bilgi!</strong>Şifreler uyuşmuyor
                            </div>
                                
                            <?php }   else if (isset($_GET['durum'])=="eksiksifre") 
                        {?>
                            <div class="alert alert-danger">
                                <strong>Bilgi!</strong>En az şifreniz 6 karakter olmalıdır
                            </div>
                                
                            <?php }
                    ?>
   
                    <?php require_once 'hesap-sidebar.php' ?>                   
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
                        <form action="nedmin/netting/kullanici.php" method="POST" class="form-horizontal" id="personal-info-form">
                        <div class="settings-details tab-content">
                                    <div class="tab-pane fade active in" id="Personal">
                                        <h2 class="title-section">Mağaza Başvurusu </h2>
                                        <div class="personal-info inner-page-padding"> 
                                        <p>Başvuru işlemini tamamlamak için tüm bilgilerin eksiksiz girilmesi gerekmektedir.</p> 
                                        <div class="form-group">
                                                <label class="col-sm-3 control-label">Mail</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control"  disabled="" value="<?php echo $kullanicicek['kullanici_mail'] ?>"   id="first-name" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Banka Adı</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="<?php echo $kullanicicek['kullanici_banka'] ?>"  name="kullanici_banka" id="first-name" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">IBAN Numarası</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="<?php echo $kullanicicek['kullanici_iban'] ?>"  name="kullanici_iban" id="first-name" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Ad</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="<?php echo $kullanicicek['kullanici_ad'] ?>"  name="kullanici_ad" id="first-name" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Soyad</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control"value="<?php echo $kullanicicek['kullanici_soyad'] ?> " name="kullanici_soyad" id="last-name" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Telefon </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="company-name" value="<?php echo $kullanicicek['kullanici_gsm'] ?> " name="kullanici_gsm" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Bireysel/Kurumsal</label>
                                                <div class="col-sm-9">
                                                    <div class="custom-select">
                                                        <select name="kullanici_tip" id="kullanici_tip" class='select2'>
                                                            <option

                                                            <?php if ($kullanicicek['kullanici_tip']=="PERSONAL") {
                                                                echo "selected";
                                                                
                                                            } ?> value="PERSONAL">Bireysel</option>
                                                            <option
                                                            <?php if ($kullanicicek['kullanici_tip']=="PRIVATE_COMPANY") {
                                                                echo "selected";
                                                                
                                                            } ?> value="PRIVATE_COMPANY">Kurumsal</option>
                                                          
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tc">

                                             <div class="form-group">
                                                <label class="col-sm-3 control-label">T.C</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="first-name" name="kullanici_tc" type="text" value="<?php echo $kullanicicek['kullanici_tc']; ?>" >
                                                </div>
                                            </div>
                                            </div>

                                            <div id="kurumsal">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Firma Ünvan</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="first-name" name="kullanici_unvan" type="text" value="<?php echo $kullanicicek['kullanici_unvan']; ?>" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Firma V.Dairesi</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="first-name" name="kullanici_vdaire" type="text" value="<?php echo $kullanicicek['kullanici_vdaire']; ?>" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Firma V.No</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="first-name" name="kullanici_vno" type="text" value="<?php echo $kullanicicek['kullanici_vno']; ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-3 control-label">Açık adres</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="first-name" required="" name="kullanici_adres" type="text" value="<?php echo $kullanicicek['kullanici_adres']; ?>" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">İl</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="first-name" required="" name="kullanici_il" type="text" value="<?php echo $kullanicicek['kullanici_il']; ?>" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">İlçe</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="first-name" required="" name="kullanici_ilce" type="text" value="<?php echo $kullanicicek['kullanici_ilce']; ?>" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Onay</label>
                                                <div class="checkbox">
                                                <label><input type="checkbox" required value="">Kullanım şartlarını kabul ediyorum </label>
                                            </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                <div align="right"  class="col-sm-12">
                                                    <button class="update-btn" name="musterimagazabasvuru">Başvuruyu Tamamla</button>
                                                        </div>
                                            </div>                                        
                                        </div> 
                                    </div> 
                                                                         
                                </div> 

                            </form> 
                        </div>  
                    </div>  
                </div>  
            </div> 
            <!-- Settings Page End Here -->
            <?php require_once("footer.php") ?>

            <!-- Footer Area End Here -->
        </div>
        <!-- Main Body Area End Here -->
        <!-- jquery-->  
      
        <script type="text/javascript">
               $(document).ready(function() { 
                $("#kullanici_tip").change(function(){

                    var tip=$("#kullanici_tip").val();
                    if (tip=="PERSONAL") {

                        $("#kurumsal").hide();
                        $("#tc").show();
                    }
                    else if (tip=="PRIVATE_COMPANY") {
                        $("#kurumsal").show();
                        $("#tc").hide();
                    }

                }).change();

               });
           </script>                   
    </body>
</html>
