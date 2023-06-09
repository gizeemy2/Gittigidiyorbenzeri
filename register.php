<?php require_once('header.php') ?>

    
            <!-- Main Banner 1 Area End Here --> 
            <!-- Inner Page Banner Area Start Here -->
            <div class="pagination-area bg-secondary">
                <div class="container">
                    <div class="pagination-wrapper">
                        <ul>
                            <li><a href="index.htm">Home</a><span> -</span></li>
                            <li>Üye Kayıt</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->          
            <!-- Registration Page Area Start Here -->
            <div class="registration-page-area bg-secondary section-space-bottom">
                <div class="container">
                    <h2 class="title-section">Kayıt ol</h2>
                    <div class="registration-details-area inner-page-padding">
                  
                  <?php 

                if (isset($_GET['durum'])=="farklisifre") {?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
                </div>
                    
                <?php } elseif (isset($_GET['durum'])=="eksiksifre") {?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
                </div>
                    
                <?php } elseif (isset($_GET['durum'])=="mukerrerkayit") {?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
                </div>
                    
                <?php } elseif (isset($_GET['durum'])=="basarisiz") {?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
                </div>
                    
                <?php }

                   elseif (isset($_GET['durum'])=="kayitok") {?>

                    <div class="alert alert-success">
                        <strong>Tebrikler!</strong> Kayıt Yapıldı.
                    </div>
                        
                    <?php }


                ?>


                        <form action="nedmin/netting/kullanici.php" method="POST" id="personal-info-form">

                        <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                                    <div class="form-group">
                                        <label class="control-label" for="company-name">E-mail</label>
                                        <input type="text" id="company-name" required="" name="kullanici_mail" placeholder="Emailinizi girin." class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Adınız *</label>
                                        <input type="text" id="first-name" required="" name="kullanici_ad"  placeholder="Adınızı girin." class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="last-name">Soyadınız *</label>
                                        <input type="text" id="last-name" required="" name="kullanici_soyad" placeholder="Soyadınızı girin." class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Şifre *</label>
                                        <input type="password" id="first-name" required=""  name="kullanici_passwordone" placeholder="Şifrenizi girin."class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="last-name">Şifre Tekrar *</label>
                                        <input type="password" id="last-name" required=""  name="kullanici_passwordtwo" placeholder="Şifrenizi tekrar girin." class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                                    <div class="pLace-order">
                                        <button class="update-btn disabled" type="submit" name="musterikaydet">Gönder</button>
                                    </div>
                                </div>                            </div>
                        </form>                      
                    </div> 
                </div>
            </div>
            <!-- Registration Page Area End Here -->
            <!-- Footer Area Start Here -->
            <footer>
                <div class="footer-area-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">Our Address</h3>
                                    <ul class="corporate-address">
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="Phone(01)800433633">PO Box 16122 Collins Street West Victoria 8007 Australia</a></li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i>+61 3 8376 6284</li>
                                        <li><i class="fa fa-fax" aria-hidden="true"></i>+61 3 8376 6284</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@foxtar.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">Join Our Community </h3>
                                    <ul class="featured-links">
                                        <li>
                                            <ul>
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">Forums</a></li>
                                                <li><a href="#">Become an Author</a></li>
                                                <li><a href="#">Community Meetups</a></li>
                                                <li><a href="#"> Become an Affiliate</a></li>
                                            </ul>
                                        </li>
                                    </ul>                             
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">Need Help?</h3>
                                    <ul class="featured-links">
                                        <li>
                                            <ul>
                                                <li><a href="#">Help Center</a></li>
                                                <li><a href="#">Foxtar Market Terms</a></li>
                                                <li><a href="#">Author Terms</a></li>
                                                <li><a href="#">Foxtar Licenses</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                            </ul>
                                        </li>
                                    </ul>                              
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">Follow Us On</h3>
                                    <ul class="footer-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="newsletter-area">
                                        <h3>Newsletter Sign Up!</h3>
                                        <div class="input-group stylish-input-group">
                                            <input type="text" placeholder="Enter your e-mail here" class="form-control">
                                            <span class="input-group-addon">
                                                <button type="submit">
                                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                </button>  
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area-bottom">
                    <div class="container">
                        <p>@ 2017 Foxtar market place. Trademarks and brands are the property of their respective owners.</p>
                    </div>
                </div>
            </footer>
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


<?php require_once('footer.php') ?>
