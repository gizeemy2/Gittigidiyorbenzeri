<?php require_once("header.php") ?>

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

                    <?php require_once 'hesap-sidebar.php' ?>
                      
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
                            <form class="form-horizontal" id="personal-info-form" action="nedmin/netting/kullanici.php" method="POST">
                                <div class="settings-details tab-content">
                                    <div class="tab-pane fade active in" id="Personal">
                                        <h2 class="title-section">Hesap Bilgilerimi Düzenle</h2>
                                        <div class="personal-info inner-page-padding"> 
                                        <div class="form-group">
                                                <label class="col-sm-3 control-label">Mail</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control"  disabled="" value="<?php echo $kullanicicek['kullanici_mail'] ?>"   id="first-name" type="text">
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

                                            <div class="form-group "> 
                                                  <div style="float:right;"  class="col-sm-9">
                                                    <button  class="update-btn" id="login-update" name="musteribilgiguncelle">Bilgileri Güncelle</button>
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
