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

               
   
                    <?php require_once 'hesap-sidebar.php' ?>                   
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
                                <div class="settings-details tab-content">
                                    <div class="tab-pane fade active in" id="Personal">
                                        <h2 class="title-section">Ürün Ekleme</h2>
                                        <div class="personal-info inner-page-padding"> 
                                        <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Ürün Ekleme Tarihi</th>
                                            <th scope="col">Ürün Adı</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $urunsor=$db->prepare("SELECT * FROM urun WHERE kullanici_id=:kullanici_id order by urun_zaman DESC");
                                           $urunsor->execute(array(
                                            'kullanici_id' => $_SESSION['userkullanici_id']
                                           ));

                                           $say=0;

                                           while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) { $say++ ?>
                           
                                        
                                            <tr>
                                            <th scope="row"><?php echo $say ?></th>
                                            <td><?php echo $uruncek['urun_zaman']?></td>
                                            <td><?php echo $uruncek['urun_ad']?></td>
                                            <td><button class="btn btn-primary btn-xs">Düzenle</button></td>
                                            <td><button class="btn btn-danger btn-xs">Yayından Kaldır</button></td>

                                            </tr>
                                         <?php } ?>
                                        </tbody>
                                        </table>                                           
                                       </div> 
                                    </div>                                      
                                </div> 
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
