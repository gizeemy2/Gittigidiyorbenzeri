﻿<?php require_once("header.php") ?>
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
                    if ($_GET['durum']=="hata") {?>

                    <div class="alert alert-danger">
                        <strong>Hata!</strong>İşlem Başarısız
                    </div>
                        
                    <?php }
                    if ($_GET['durum']=="ok") {?>

                        <div class="alert alert-success">
                            <strong>Bilgi!</strong> Kayıtlar Güncellendi
                        </div>
                            
                        <?php }
                        

                    ?>
   
                    <?php require_once 'hesap-sidebar.php' ?>                   
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
                        <form action="nedmin/netting/kullanici.php" method="POST" class="form-horizontal" id="personal-info-form">
                                <div class="settings-details tab-content">
                                    <div class="tab-pane fade active in" id="Personal">
                                        <h2 class="title-section">Adres Bilgilerimi Güncelle</h2>
                                        <div class="personal-info inner-page-padding"> 
                                           
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
                                                <div align="right"  class="col-sm-12">
                                                    <button class="update-btn" id="login-update" name="musteriadresguncelle">Bilgileri Güncelle</button>
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
            <?php require_once("footer.php") ;?>

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
