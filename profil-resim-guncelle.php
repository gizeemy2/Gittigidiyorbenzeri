
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
<!-- 
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
                            
                        <?php } else if (isset($_GET['durum'])=="sifreleruyusmuyor") {?>
    
                            <div class="alert alert-danger">
                                <strong>Bilgi!</strong>Şifreler uyuşmuyor
                            </div>
                                
                            <?php }
                    ?> -->
   
                    <?php require_once 'hesap-sidebar.php' ?>                   
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
                            <form class="form-horizontal" id="personal-info-form"  enctype="multipart/form-data"  action="nedmin/netting/adminislem.php" method="POST">
                                <div class="settings-details tab-content">
                                    <div class="tab-pane fade active in" id="Personal">
                                        <h2 class="title-section">Profil Güncelleme</h2>
                                        <div class="personal-info inner-page-padding"> 
                                     
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Mevcut resim </label>
                                                <div class="col-sm-9">
                                                <img width="128" height="128" src="<?php echo $kullanicicek['kullanici_magazafoto'] ?>"  >
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Profil resminizi seçiniz</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" required  name="kullanici_magazafoto" id="first-name" type="file" >
                                                </div>
                                            </div>
                                            <input type="hidden" name="eski_yol" value="<?php echo $kullanicicek['kullanici_magazafoto'] ?>" >

                                            <div class="form-group "> 
                                                  <div style="float:right;"  class="col-sm-12">
                                                    <button  class="update-btn" id="login-update" name="kullaniciresimguncelle"> Güncelle</button>
                                                </div>
                                                </div>
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
        <script src="js\jquery-2.2.4.min.js" type="text/javascript"></script>

        <!-- Plugins js -->
        <script src="js\plugins.js" type="text/javascript"></script>
        
        <!-- Bootstrap js -->
        <script src="js\bootstrap.min.js" type="text/javascript"></script>

        <!-- WOW JS -->     
        <script src="js\wow.min.js"></script>

        <!-- Owl Cauosel JS -->
        <script src="vendor\OwlCarousel\owl.carousel.min.js" type="text/javascript"></script>
        
        <!-- Meanmenu Js -->
        <script src="js\jquery.meanmenu.min.js" type="text/javascript"></script>

        <!-- Srollup js -->
        <script src="js\jquery.scrollUp.min.js" type="text/javascript"></script>

         <!-- jquery.counterup js -->
        <script src="js\jquery.counterup.min.js"></script>
        <script src="js\waypoints.min.js"></script>

        <!-- Nouislider Js -->
        <script src="vendor\noUiSlider\nouislider.min.js" type="text/javascript"></script>

        <!-- Isotope js -->
        <script src="js\isotope.pkgd.min.js" type="text/javascript"></script>

        <!-- Select2 Js -->
        <script src="js\select2.min.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js\main.js" type="text/javascript"></script>

    </body>
</html>
