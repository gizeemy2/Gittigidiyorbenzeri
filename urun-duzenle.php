<?php require_once("header.php") ?>
<?php    

 $urunsor=$db->prepare("SELECT * FROM urun WHERE kullanici_id=:kullanici_id AND urun_id=:urun_id order by urun_zaman DESC");
 $urunsor->execute(array(
  'kullanici_id' => $_SESSION['userkullanici_id'],
  'urun_id' => $_GET['urun_id']
 ));
$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);


?>
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
                    if (isset($_GET['durum'])=="ok") {?>

                        <div class="alert alert-success">
                            <strong>Bilgi!</strong> Kayıtlar Başarılı
                        </div>
                            
                        <?php }
                        

                    ?>
   
                    <?php require_once 'hesap-sidebar.php' ?>                   
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
                        <form action="nedmin/netting/adminislem.php" method="POST" enctype="multipart/form-data"   class="form-horizontal" id="personal-info-form">
                                <div class="settings-details tab-content">
                                    <div class="tab-pane fade active in" id="Personal">
                                        <h2 class="title-section">Ürün Düzenleme</h2>
                                        <div class="personal-info inner-page-padding"> 
                                        <div class="form-group">
                                                <label  class="col-sm-3 control-label">Mevcut fotoğrafı</label>
                                                <div class="col-sm-9">
                                                    <img width="200" src="<?php echo $uruncek['urunfoto_resimyol']?>"> 
                                                </div>
                                            </div>
                                        <div class="form-group">
                                                <label  class="col-sm-3 control-label">Ürün fotoğrafı</label>
                                                <div class="col-sm-9">
                                                    <input required class="form-control" id="first-name" name="urunfoto_resimyol" type="file" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Kategori</label>
                                                <div class="col-sm-9">
                                                    <div class="custom-select">
                                                        <select name="kategori_id" class='select2'>
                                                        <?php
                                                         $kategorisor=$db->prepare("SELECT * FROM kategori order by kategori_sira ASC");
                                                         $kategorisor->execute();

                                                        while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                                                         ?>  
                                                        <option <?php if ($kategoricek['kategori_id']==$uruncek['kategori_id']) {
                                                             echo "selected";
                                                        } ?> value="<?php echo $kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_ad']?></option>
                                                          <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Ürün Adı</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="first-name" required="" name="urun_ad" value="<?php echo $uruncek['urun_ad'] ?>" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Ürün Açıklama</label>
                                                <div class="col-sm-9">
                                                <textarea  class="ckeditor" id="editor1" name="urun_detay" ><?php echo $uruncek['urun_detay'] ?></textarea>
                                            </div>
                                            </div>
                                           <div class="form-group">
                                                <label class="col-sm-3 control-label">Ürün Fiyatı</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="first-name" required="" name="urun_fiyat" value="<?php echo $uruncek['urun_fiyat'] ?>" >
                                                </div>
                                            </div>
                                             <input type="hidden" value="<?php echo $uruncek['urun_id'] ?>" name="urun_id">           
                                             <input type="hidden" value="<?php echo $uruncek['urunfoto_resimyol'] ?>" name="eski_yol">           

                                            <div class="form-group">
                                                <div align="right"  class="col-sm-12">
                                                    <button class="update-btn" id="login-update" name="magazaurunduzenle">Ürün Düzenle</button>
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
                        
                        <script type="text/javascript">

                CKEDITOR.replace( 'editor1',

                {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true

                } 

                );
</script>

    </body>
</html>
